<?php
$title = "Tous les films";
include 'header.php';

?>
    <div class="background-top">
        <img src="assets/img/gauche.png">
    </div>
    <div class="container">
        <div class="titre-acteurs">

            <h2 class="title-actors">Liste des films</h2>
            <img class="img-title" src="assets/img/play.svg" alt="play">
        </div>
        <div class="row">
            <?php
            foreach ($themovies as $allmovies) {
                echo '<div class="col-md-4">';
                echo '<div class="movie-card">';
                echo '<p class="movie-title">' . $allmovies['titre'] . '</p>';
                echo '<img src="assets/img/' . $allmovies['image'] . '">';
                echo '<div class="movie-link">';
                echo '<a href="index.php?page=film&film=' . $allmovies['id'] . '">Voir la fiche</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            ?>
        </div>
    </div>
    <div class="img-background">
        <img src="assets/img/droite.png" alt="">
    </div>







<?php
include 'footer.php';

?>