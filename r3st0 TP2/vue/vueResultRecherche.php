<h1>Recherche d'un restaurant</h1>
<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">


    <?php
    switch ($critere) {
        case "nom":
            ?>
            Recherche par nom : <br />
            <input type="text" name="nomR" placeholder="nom" value="<?= $nomR ?>" /><br />
            <?php
            break;
        case "adresse":
            ?>
            Recherche par adresse : <br />
            <input type="text" name="villeR" placeholder="ville" value="<?= $villeR ?>"/><br />
            <input type="text" name="cpR" placeholder="code postal" value="<?= $cpR ?>"/><br />
            <input type="text" name="voieAdrR" placeholder="rue" value="<?= $voieAdrR ?>"/><br />
            <?php
            break;
        
    }
    ?>
    <br /><br />
    <input type="submit" value="Rechercher" />

</form>

<?php
for ($i = 0; $i < count($resultat); $i++) {
    ?>

    <div class="card">
        <div class="photoCard">
        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&idR=" . $resultat[$i]['idR'] . "'>" . $resultat[$i]['nomR'] . "</a>"; ?>
            <br />
            <?= $resultat[$i]["numAdrR"] ?>
            <?= $resultat[$i]["voieAdrR"] ?>
            <br />
            <?= $resultat[$i]["cpR"] ?>
            <?= $resultat[$i]["villeR"] ?>
            <?= $resultat[$i]["descR"] ?>
        </div>
        <div>
            <?= $resultat[$i]['horairesR']; ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">
            </ul>
        </div>
    </div>

    <?php
}
?>