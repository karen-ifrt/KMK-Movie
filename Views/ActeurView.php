<?php
$title = "Film";
include 'header.php';

?>

<div class="row">
            <form action="index.php" method="get">
                <select name="Acteur">
                    echo '<option>Choisissez un acteur</option>';
                    foreach ($all_Actors as $Actor) {
                    }
                    ?>
                <input type="submit" value="Envoyer"/>
        </div>

<?php
include 'footer.php';
?>