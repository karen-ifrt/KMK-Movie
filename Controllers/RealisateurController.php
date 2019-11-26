<?php 

    require ('Models/Realisateur.php');

    if(isset($_GET['realisateur'])) {
        $id = $_GET['realisateur'];
    }

    $directors = getReal($id);
    $realPic = realMoviePic($id);

    require ('Views/RealisateurView.php');

?>