<?php 

    require ('Models/Realisateur.php');

    if(isset($_GET['realisateur'])) {
        $id = $_GET['realisateur'];
    }

    $directors = getDirector($id);

    require ('Views/RealisateurView.php');

?>