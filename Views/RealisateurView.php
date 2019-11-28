<?php

$title = "Réalisateur";
include 'header.php';

?>

<div class="fiche-acteur">
    <div class="container">
        <div class="acteur-title titre-acteurs">
            <h2 class="titre-actors">
                <?php
                echo $directors['nom'];
                ?>
            </h2>
            <img class="img-title" src="assets/img/play.svg" alt="play">
        </div>
        <div class="one-actor">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-movie">
                        <h3>SA BIOGRAPHIE</h3>
                        <div class="movie-divider"></div>
                    </div>
                    <img class="img-thumbnail" src="<?php echo 'assets/img/' . $directors['image'];  ?>">
                    <div class="actor-content">
                        <p class="nationalite">Nationalité : <?php echo $directors['nationalite'] ?></p>
                        <p class="nationalite">Age : <?php echo $directors['age'] ?> ans</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="title-movie">
                        <h3>SES FILMS</h3>
                        <div class="movie-divider"></div>
                    </div>

                    <div class="list-movie">
                        <?php
                        foreach ($realPic as $key => $value) {
                            echo  '<div class="card-movie">';
                            echo '<div class="movie-header"><img class="img-movie" src="assets/img/' . $value['image'] . '"></div>';
                            echo '<div class="movie-body"><p>' . $value['titre'] . '</p>';
                            echo '<p class="link-film"><a href="index.php?page=film&film=' . $value['id'] . '">';
                            echo '<img alt="bouton" src="assets/img/playyy.svg" class="btn-fiche"><p>Voir la fiche</p></a></p></div></div>';
                        };
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="retour">
                <a href="index.php?page=allreals" class="btn-retour">
                    <img src="assets/img/replayyyyy.svg" alt="">
                    <p>Retour</p>
                </a>
        </div>

    </div>

</div>


<?php
include 'footer.php';
?>