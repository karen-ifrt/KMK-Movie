<?php
$title = "Tous les realisateurs";
include 'header.php';
?>



<div class="container">
    <div class="titre-acteurs">

        <h2 class="title-actors">Liste des réalisateurs</h2>
        <img class="img-title" src="assets/img/play.svg" alt="play">

    </div>


    <div class="row">
        <?php
        foreach ($thedirectors as $alldirectors) {
            echo '<div class="col-md-3">';
            echo '<div class="actor-card">';
            echo '<p class="actor-title">' . $alldirectors['nom'] . '</p>';
            // echo '<img src="assets/img/' . $alldirectors['image'] . '">';
            echo '<div class="actor-link">';
            echo '<a href="index.php?page=realisateur&realisateur=' . $alldirectors['id'] . '">Voir</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        ?>
    </div>
</div>
</div>
    <?php include 'footer.php';
?>

