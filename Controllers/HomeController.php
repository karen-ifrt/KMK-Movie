<?php 

    require ('Models/Home.php');

    $all_actors = getActors();

    require ('Views/HomeView.php');

?>