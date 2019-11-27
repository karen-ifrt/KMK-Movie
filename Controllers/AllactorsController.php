<?php

require ('Models/Allactors.php');

if(isset($_GET['film'])) {
    $id = $_GET['film'];
}

$theactors = getActors();


require ('Views/AllactorsView.php');

?>