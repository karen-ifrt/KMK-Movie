<?php 

    require ('Models/Home.php');

    $all_movies = getMovie();

    require ('Views/HomeView.php');

?>