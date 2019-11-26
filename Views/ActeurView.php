<?php
$title = "Acteur";
include 'header.php';




?>

<div class="fiche-acteur">
    <div class="container">
        <div class="acteur-title">
            <?php
            echo $actors['nom'];
            ?>
        </div>
        <div class="one-actor">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo 'assets/img/' . $actors['image'];  ?>">
                </div>
                <div class="col-md-6">

                </div>

            </div>
            <div class="row">
                    <div class="content-actor">

                        <div class="title-actor">
                            <h3>SES FILMS</h3>
                            <div class="divider"></div>
                        </div>
                        <div class="list-movie">
                            <?php
                            foreach ($mymovie as $key => $value) {
                                echo '<p>' . $value['titre'] . '</p>';
                            }
                            ?>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';


?>