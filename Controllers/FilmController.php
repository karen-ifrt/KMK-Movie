<?php 

    require ('Models/Film.php');
    

    if(isset($_GET['film'])) {
        $id = $_GET['film'];
    }

    $movies = getMovie($id);
    $myactor = movieActor($id);
    $myreal = movieReal($id);
    $mygenre = myGenre($id);
    require ('Views/FilmView.php');



?>
