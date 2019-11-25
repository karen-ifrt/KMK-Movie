<?php 

    require ('Models/Home.php');

    $all_movies = getMovie();

    require ('Views/HomeView.php');

    if (isset($_GET['id_actor'])){
        $this_actor = getOneActor($_GET['id_actor']);
        }

?>
