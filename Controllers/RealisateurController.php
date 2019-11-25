<?php 

    require ('Models/Realisateur.php');

    if(isset($_GET['realisateur'])) {
        $id = $_GET['realisateur'];
    }

    $realisateurs = getRealisateur($id);

    require ('Views/RealisateurView.php');

?>