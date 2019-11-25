<?php
$title = "Home";
include 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <video class="video" src="assets/img/PopCorn.mp4" autoplay muted loop></video>


        <div class="col-md-6">
            <form action="index.php" method="get">
            <input type="hidden" name="page" value="film">
                <select name="film">
                    <?php
                    echo '<option>Choisissez votre film</option>';

                    foreach ($all_movies as $film) {
                        echo '<option value="'.$film['id'].'">' . $film['titre'] . '</option>';
                    }

                    ?>
                </select>
                <input type="submit" value="Envoyer"/>
            </form>
        </div>

    </div>
</div>

<?php
include 'footer.php';
?>