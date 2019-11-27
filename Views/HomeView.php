<?php
$title = "Home";
include 'header.php';
?>

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav m-auto">
      <a class="nav-item nav-link active" href="#">Tous les films</a>
      <a class="nav-item nav-link" href="#">Recherche par acteurs</a>
      <a class="nav-item nav-link" href="#">Recherche par réalisateurs</a>
      <a class="nav-item nav-link" href="#">Ajouter un film</a>
    </div>
  </div>
</nav>


<div class="container-fluid">
    <div class="row">
        <video class="video" src="assets/img/PopCorn.mp4" autoplay muted loop>
        </video>

    </div>

    <div class="container">
        <h2 class="home-title">Recherche par un genre</h2>
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

        <form action="index.php">
            <input type="hidden" name="page" value="formulaire">
            <button>Ajouter un film</button>

        </form> -->