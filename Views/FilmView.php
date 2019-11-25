<?php
$title = "Film";
include 'header.php';

?>

<div class="container">
    <div class="film-title">
    <h2>
        <?php
        echo $movies['titre'];
        ?>
    </h2>
    </div>

    <div class="row">

        <div class="col-md-6">
            <img src="<?php echo 'assets/img/' . $movies['image'];  ?>">
        </div>
        <div class="col-md-6">
            <p>Date de sortie : <?php echo $movies['date'] ?></p>
            <p>Nationalité : <?php echo $movies['nationalite'] ?></p>
            <p>Synopsis : <?php echo $movies['synopsis'] ?></p>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>