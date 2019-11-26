<?php

$title = "Réalisateur";
include 'header.php';

?>

<div class="container">
    <div class="row">
        <?php
        echo $directors['nom'];

        foreach ($realPic as $key => $value) {
            echo $value['titre'];

            ?>
            <img src="<?php echo 'assets/img/' . $value['image'] ?>">
            <?php
        };
        ?>
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</div>

<?php
include 'footer.php';
?>