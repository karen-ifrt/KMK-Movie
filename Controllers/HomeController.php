<?php 

    require ('Models/Home.php');

    $all_movies = getMovie();
    $all_actors = getActors();
    require ('Views/HomeView.php');


?>
