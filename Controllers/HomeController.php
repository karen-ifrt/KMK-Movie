<?php 

    require ('Models/Home.php');

    $all_movies = getMovie();
    $all_actors = getActors();
    $all_directors = getDirectors();
    $all_genders = getGenders();
    require ('Views/HomeView.php');


?>