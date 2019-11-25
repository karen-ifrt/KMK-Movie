<?php 

    require ('Models/Home.php');

    $all_actors = getActors();

    require ('Views/HomeView.php');

    if (isset($_GET['id_actor'])){
        $this_actor = getOneActor($_GET['id_actor']);
        }

?>
