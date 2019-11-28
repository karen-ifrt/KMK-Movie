<?php
$title = "Home";
include 'header.php';
?>




<div class="container-fluid">
    <div class="row">
        <video class="video" src="assets/img/PopCorn.mp4" autoplay muted loop>
        </video>
        <div class="logo-home">
            <img src="assets/img/KMK.svg" alt="Logo home">
        </div>
        <p class="quote"><span><img class="quote-1" src="assets/img/quote.svg" alt=""></span> Le cinéma, c'est un rêve que l'on rend possible. <span><img class="quote-2" src="assets/img/quote.svg" alt=""></span></p>

    </div>

    <div class="container">
        <div class="titre-acteurs">
            <h2 class="title-actors the-title">Recherche par genre</h2>
            <img class="img-title" src="assets/img/play.svg" alt="play">

        </div>
        <div class="list-gender">
            <div class="row">

                <?php
                foreach ($all_genders as $genre) {
                    echo '<div class="col-md-3">';
                    echo '<a href="index.php?page=genre&genre=' . $genre['id'] . '"><p class="mygenre">' . $genre['genre'] . '</p></a>';
                    echo '</div>';
                }
                ?>
            </div>

        </div>




    </div>




    <!-- <form action="index.php" method="get">
            <input type="hidden" name="page" value="film">

            <select name="film">
                <?php
                // echo '<option>Choisissez un film</option>';
                // foreach ($all_movies as $film) {
                //     echo '<option value="' . $film['id'] . '">' . $film['titre'] . '</option>';
                // }

                ?>
                <input type="submit" value="Envoyer" />
        </form>
        <form action="index.php" method="get">
            <input type="hidden" name="page" value="acteur">

            <select name="acteur">
                <?php
                // echo '<option>Choisissez un acteur</option>';
                // foreach ($all_actors as $acteur) {
                //     echo '<option value="' . $acteur['id'] . '">' . $acteur['nom'] . '</option>';
                // }
                ?>

                <input type="submit" value="Envoyer" />
        </form>


        <form action="index.php" method="get">
            <input type="hidden" name="page" value="realisateur">

            <select name="realisateur">
                <?php
                // echo '<option>Choisissez un realisateur</option>';
                // foreach ($all_directors as $realisateur) {
                //     echo '<option value="' . $realisateur['id'] . '">' . $realisateur['nom'] . '</option>';
                // }
                ?>

                <input type="submit" value="Envoyer" />
        </form>
        <form action="index.php" method="get">
            <input type="hidden" name="page" value="genre">

            <select name="genre">
                <?php
                // echo '<option>Choisissez un genre</option>';
                // foreach ($all_genders as $genre) {
                //     echo '<option value="' . $genre['id'] . '">' . $genre['genre'] . '</option>';
                // }
                ?>
                <input type="submit" value="Envoyer" />
        </form>

        