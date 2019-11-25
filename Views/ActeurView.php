<?php
$title = "Acteur";
include 'header.php';

?>

<div class="row">
            <form action="index.php" method="get">
                <select name="Acteur"> 
                    <?php
                    echo '<option>Choisissez votre film</option>';
                    foreach ($all_actors as $acteur) {
                        echo '<option value="'.$acteur['id'].'">' . $acteur['nom'] . '</option>';
                    }
                    ?>
                <input type="submit" value="Envoyer"/>
        </div>

<?php
include 'footer.php';
?>