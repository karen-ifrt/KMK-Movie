<?php 

    require ('Models/Acteur.php');


    if(isset($_GET['acteur'])) {
        $id = $_GET['acteur'];
    }

    $actors = getActor($id);
    $mymovie = actorMovie($id);

    require ('Views/ActeurView.php');


?>