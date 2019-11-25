<?php 

    require ('Models/Home.php');

    $all_movies = getMovie();
    $all_actors = getActors();
    $all_realisateurs = getRealisateurs();
    $all_genres = getGenres();
    require ('Views/HomeView.php');


?>