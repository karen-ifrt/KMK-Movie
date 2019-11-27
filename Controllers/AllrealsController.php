<?php

require ('Models/Allreals.php');

if(isset($_GET['film'])) {
    $id = $_GET['film'];
}

$theactors = getActors();


require ('Views/AllrealsView.php');

?>