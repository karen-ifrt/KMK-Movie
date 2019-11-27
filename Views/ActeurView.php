<?php
$title = "Acteur";
include 'header.php';




?>

<div class="fiche-acteur">
    <div class="container">
        <div class="acteur-title">
            <h2>
                <?php
                echo $actors['nom'];
                ?>
            </h2>
        </div>
        <div class="one-actor">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-thumbnail" src="<?php echo 'assets/img/' . $actors['image'];  ?>">
                </div>
                <div class="col-md-8">
                    <div class="actor-content">
                        <p class="nationalite">Nationalité : <?php echo $actors['nationalite'] ?></p>
                        <p class="nationalite">Age : <?php echo $actors['age'] ?></p>
                        <p class="nationalite">Prix : <?php echo $actors['prix'] ?></p>
                    </div>
                    <div class="title-movie">
                        <h3>SES FILMS</h3>
                        <div class="movie-divider"></div>
                    </div>

                    <div class="list-movie">
                        <?php
                        foreach ($mymovie as $key => $value) {
                            echo  '<div class="card">';
                            echo '<div class="card-header"><img class="img-thumbnail img-movie" src="assets/img/' . $value['image'] . '"></div>';
                            echo '<div class="card-body">' . $value['titre'] . '</div>';
                            echo '</div>';     
                        };
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="retour">
            <a href="index.php" class="btn-retour">Retour accueil</a>
        </div>

    </div>

</div>


<?php
include 'footer.php';


?>