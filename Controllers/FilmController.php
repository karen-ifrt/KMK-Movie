<?php 

    require ('Models/Film.php');

    if(isset($_GET['film'])) {
        $id = $_GET['film'];
    }

    $movies = getMovie($id);

    require ('Views/FilmView.php');

?>