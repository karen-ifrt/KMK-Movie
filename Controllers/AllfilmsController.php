<?php

require ('Models/Allfilms.php');

if(isset($_GET['film'])) {
    $id = $_GET['film'];
}

$themovies = getMovie();


require ('Views/AllfilmsView.php');

?>