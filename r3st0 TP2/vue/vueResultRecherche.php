<?php
echo "<h1>Liste des restaurants</h1>";
if (isset($listeRestos) && is_array($listeRestos)) {
    for ($i = 0; $i < count($listeRestos); $i++) {
        ?>

        <div class="card">
            <div class="photoCard">
            </div>
            <div class="descrCard"><?php echo "<a href='./?action=detail&idR=" . $listeRestos[$i]['idR'] . "'>" . $listeRestos[$i]['nomR'] . "</a>"; ?>
                <br />
                <?= $listeRestos[$i]["numAdrR"] ?>
                <?= $listeRestos[$i]["voieAdrR"] ?>
                <br />
                <?= $listeRestos[$i]["cpR"] ?>
                <?= $listeRestos[$i]["villeR"] ?>
                <?= $listeRestos[$i]["descR"] ?>
            </div>
            <div>
                <?= $listeRestos[$i]['horairesR']; ?>
            </div>
            <div class="tagCard">
                <ul id="tagFood">
                </ul>
            </div>
        </div>

        <?php
    }
}
?>