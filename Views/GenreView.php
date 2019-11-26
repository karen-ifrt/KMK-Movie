<?php

$title = "Genre";
include 'header.php';

?>

<div class="container">
    <div class="row">
        <?php
         echo $gender['genre'];


        foreach ($moviegender as $key => $value) {
            echo $value['titre'];
        }

        ?>
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</div>


<?php
include 'footer.php';
?>