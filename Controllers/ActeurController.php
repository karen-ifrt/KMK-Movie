<?php 

    require ('Models/Acteur.php');
    $all_actors = getActors();
    require ('Views/ActeurView.php');

    if (isset($_GET['id_actor'])){
        $this_actor = getOneActor($_GET['id_actor']);
        }

?>