<?php

require ('Models/Allreals.php');

if(isset($_GET['film'])) {
    $id = $_GET['film'];
}

$thedirectors = getDirectors();


require ('Views/AllrealsView.php');

?>