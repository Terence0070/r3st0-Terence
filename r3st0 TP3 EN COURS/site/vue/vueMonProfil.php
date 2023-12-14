
<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["mailU"] ?> <br />
Mon pseudo : <?= $util["pseudoU"] ?> <br />

<hr>

les restaurants que j'aime : <br>
    <a href="./?action=detail&idR=4">Cidrerie du fronton</a><br>
    <a href="./?action=detail&idR=6">Le Bistrot Sainte Cluque</a><br>
    <a href="./?action=detail&idR=8">La table de POTTOKA</a><br>
<hr>
les types de cuisine que j'aime : 
<ul id="tagFood">		
    <?php for ($j = 0; $j < count($mesTypeCuisineAimes); $j++) { ?>
        <li class="tag"><span class="tag">#</span><?= $mesTypeCuisineAimes[$j]["libelleTC"] ?></li>
    <?php } ?>
</ul>
<hr>
<a href="./?action=deconnexion">se deconnecter</a>