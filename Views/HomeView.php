<?php
$title = "Home";
include 'header.php';
?>




<div class="container-fluid">
    <div class="row">
        <video class="video" src="assets/img/PopCorn.mp4" autoplay muted loop>
        </video>
        <div class="logo-home">
            <img class="logo-h" src="assets/img/KMK.svg" alt="Logo home">
            <p class="quote"><span><img class="quote-1" src="assets/img/quote.svg" alt=""></span> Le cinéma, c'est un rêve que l'on rend possible. <span><img class="quote-2" src="assets/img/quote.svg" alt=""></span></p>
        </div>

    </div>
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

<?php include 'footer.php';
?>
