<?php

$title = "Genre";
include 'header.php';

?>


<div class="container">
    <div class="titre-acteurs">

        <h2 class="title-actors"><?php echo $gender['genre']; ?></h2>
        <img class="img-title" src="assets/img/play.svg" alt="play">
    </div>
    <div class="row">
        <?php
        foreach ($moviegender as $mygender) {
            echo '<div class="col-md-4">';
            echo '<div class="movie-card">';
            echo '<p class="movie-title">' . $mygender['titre'] . '</p>';
            echo '<img src="assets/img/' . $mygender['image'] . '">';
            echo '<div class="movie-link">';
            echo '<a href="index.php?page=film&film=' . $mygender['id_Films'] . '">Voir la fiche</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        ?>
    </div>

    <div class="retour">
                <a href="index.php" class="btn-retour">
                    <img src="assets/img/replayyyyy.svg" alt="">
                    <p>Retour</p>
                </a>
        </div>
</div>




<?php
include 'footer.php';
?>