<?php
$title = "Home";
include 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <video class="video" src="assets/img/PopCorn.mp4" autoplay muted loop></video>

        <?php
            // foreach ($all_actors as $key => $value) {
            //     foreach ($value as $key => $test) {
            //         echo $test . "<br>";
            //     }
            // }
        ?>
         <h3>les acteurs : <?php foreach ($this_actor as $key => $value) {
                echo $value['nom'] . "<br>";
            }
            ?>
            </h3>

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
