<?php
$title = "Tous les acteurs";
include 'header.php';
?>

<div class="background-top">
    <img src="assets/img/gauche.png">
</div>

<div class="bottom">
<div class="container">
    <div class="titre-acteurs">

        <h2 class="title-actors">Liste des acteurs</h2>
        <img class="img-title" src="assets/img/play.svg" alt="play">

    </div>


    <div class="row">
        <?php
        foreach ($theactors as $allactors) {
            echo '<div class="col-md-3">';
            echo '<div class="actor-card">';
            echo '<p class="actor-title">' . $allactors['nom'] . '</p>';
            // echo '<img src="assets/img/' . $allactors['image'] . '">';
            echo '<div class="actor-link">';
            echo '<a href="index.php?page=acteur&acteur=' . $allactors['id'] . '">Voir</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        ?>
    </div>
</div>
<div class="background-bottom-actors">
    <img src="assets/img/droite.png" alt="">
</div>
</div>




<?php
include 'footer.php';

?>