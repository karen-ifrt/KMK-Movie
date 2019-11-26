<?php
$title = "Film";
include 'header.php';

?>

<div class="fiche-film">
    <div class="container">
        <div class="film-title">
            <h2>
                <?php
                echo $movies['titre'];
                ?>
            </h2>
        </div>

        <div class="onefilm">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo 'assets/img/' . $movies['image'];  ?>">
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <p class="date">Date de sortie : <?php echo $movies['date'] ?></p>
                        <p class="nationalite">Nationalité : <?php echo $movies['nationalite'] ?></p>
                        <p>Genre(s) : <?php         
                        foreach ($mygenre as $key => $value) {
            echo $value['genre'] . ' - ';
        } ?></p>
                        <p class="synopsis">Synopsis : <?php echo $movies['synopsis'] ?></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="title-actor">
                    <h3>LES ACTEURS</h3>
                    <div class="divider"></div>
                </div>
                <div class="content-actor">
                    <?php
                    foreach ($myactor as $key => $value) {
                        echo '<p class="actor-name">' . $value['nom'] . '</p>';
                    };   ?>
                </div>
            </div>

            <div class="col-md-6">
            <div class="title-actor">
                    <h3>LES RÉALISATEURS</h3>
                    <div class="divider"></div>
                </div>
                <div class="content-real">
                    <?php

                    foreach ($myreal as $key => $valreal) {
                        echo '<p class="real-name">' .  $valreal['nom'] . '</p>';
                    };
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>