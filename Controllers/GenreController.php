<?php 

    require ('Models/Genre.php');
    require ('Views/GenreView.php');

    if(isset($_GET['genre'])) {
        $id = $_GET['genre'];
    }

    $genres = getGenre($id);

    

?>