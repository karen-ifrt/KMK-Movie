<?php
$title = "Film";
include 'header.php';

?>

<div class="fiche-film">
    <div class="container">
        <div class="film-title titre-acteurs">
            <h2 class="titre-actors">
                <?php
                echo $movies['titre'];
                ?>
            </h2>
            <img class="img-title" src="assets/img/play.svg" alt="play">

        </div>

        <div class="onefilm">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-thumbnail" src="<?php echo 'assets/img/' . $movies['image'];  ?>">
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <p class="date">Date de sortie : <?php echo $movies['date'] ?></p>
                        <p class="nationalite">Nationalité : <?php echo $movies['nationalite'] ?></p>
                        <p>Genre(s) : <?php
                                        foreach ($mygenre as $key => $value) {
                                            echo $value['genre'] . ' - ';
                                        } ?></p>
                        <p class="synopsis">Synopsis : <?php echo $movies['synopsis'] ?></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="title-actor">
                    <h3>LES ACTEURS</h3>
                    <div class="divider"></div>
                </div>
                <div class="content-actor">

                    <?php
                    foreach ($myactor as $key => $value) {
                        echo  '<div class="carte">';
                        echo '<div class="carte-header"><img src="assets/img/' . $value['image'] . '"></div>';
                        echo '<div class="carte-body">' . $value['nom'] . '</div>';
                        echo   '<div class="carte-footer"><a  id="carte-lien" href="index.php?page=acteur&acteur=' . $value['id'] . '"><img alt="bouton" src="assets/img/playyy.svg" class="btnn-fiche"><p>Voir la fiche</p></a></div>';
                        echo '</div>';
                    };
                    ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="title-actor">
                    <h3>LE(S) RÉALISATEUR(S)</h3>
                    <div class="divider"></div>
                </div>
                <div class="content-real">
                    <?php

                    foreach ($myreal as $key => $valreal) {
                        echo  '<div class="carte">';
                        echo '<div class="carte-header"><img src="assets/img/' . $valreal['image'] . '"></div>';
                        echo '<div class="carte-body">' . $valreal['nom'] . '</div>';
                        echo   '<div class="carte-footer"><a id="carte-lien" href="index.php?page=realisateur&realisateur=' . $valreal['id_realisateur'] . '"><img alt="bouton" src="assets/img/playyy.svg" class="btnn-fiche"><p>Voir la fiche</p></a></div>';
                        echo '</div>';

                    };
                    ?>
                </div>
            </div>
        </div>
        <div class="retour">
            <a href="index.php?page=allfilms" class="btn-retour">
                <img src="assets/img/replayyyyy.svg" alt="">
                <p>Retour</p>
            </a>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>