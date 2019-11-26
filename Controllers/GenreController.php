<?php 

    require ('Models/Genre.php');

    if(isset($_GET['genre'])) {
        $id = $_GET['genre'];
    }

    $gender = getGenre($id);
    $moviegender = movieGenre($id);

    require ('Views/GenreView.php');

    ?>