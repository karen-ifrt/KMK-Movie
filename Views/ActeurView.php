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
                    <img src="<?php echo 'assets/img/' . $actors['image'];  ?>">
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
                            echo '<p>' . $value['titre'] . '</p>';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="retour">
            <a href="index.php" class="btn-retour">Retour</a>
        </div>

    </div>

</div>


<?php
include 'footer.php';


?>