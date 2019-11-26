<?php
$title = "Acteur";
include 'header.php';




?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <?php
            foreach ($mymovie as $key => $value) {
                echo $value['titre'];
                }            ?>
        </div>

    </div>
</div>

<?php
include 'footer.php';


?>