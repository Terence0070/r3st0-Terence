<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/authentification.inc.php";

// Création du menu burger
$menuBurger = array();
$menuBurger[] = Array("url" => "./?action=connexion", "label" => "Connexion");
$menuBurger[] = Array("url" => "./?action=inscription", "label" => "Inscription");

// Récupération des données GET, POST et SESSION
if (!isset($_POST["mailU"]) || !isset($_POST["mdpU"])) {
    // On affiche le formulaire de connexion
    $titre = "Authentification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/pied.html.php";
} else {
    // Récupération des données du formulaire
    $mailU = $_POST["mailU"];
    $mdpU = $_POST["mdpU"];

    // Tenter la connexion
    $util = getUtilisateurByMailU($mailU);

    if ($util && is_array($util)) {
        $mdpBD = $util["mdpU"];

        if (trim($mdpBD) == trim(crypt($mdpU, $mdpBD))) {
            // Le mot de passe est correct, effectuer les actions de connexion
            $_SESSION["mailU"] = $mailU;
            $_SESSION["mdpU"] = $mdpBD;

            // La connexion est réussie
            $titre = "Confirmation de Connexion";
            include "$racine/vue/entete.html.php";
            include "$racine/vue/vueConfirmationAuth.php"; // Message qui dit que la connexion est réussie
            include "$racine/vue/pied.html.php";
            exit(); // Arrêter l'exécution du script après affichage de la confirmation
        }
    }

    // La connexion a échoué, afficher à nouveau le formulaire d'authentification
    $titre = "Authentification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAuthentification.php"; // On doit recommencer.
    include "$racine/vue/pied.html.php";
}
?>