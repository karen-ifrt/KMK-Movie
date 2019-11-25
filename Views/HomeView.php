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
    </div>
</div>

<?php
include 'footer.php';
?>
