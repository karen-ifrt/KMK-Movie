<?php
$title = "Home";
include 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <video class="video" src="assets/img/PopCorn.mp4" autoplay muted loop></video>

            <form action="index.php" method="get">
                <select name="film">
                    <?php
                    echo '<option>Choisissez votre film</option>';
                    foreach ($all_movies as $film) {
                        echo '<option value="'.$film['id'].'">' . $film['titre'] . '</option>';
                    }
                    ?>
                <input type="submit" value="Envoyer"/>
        </div>
    </div>
