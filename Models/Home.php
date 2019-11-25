<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function getActors() {
    global $dbh;

    $all_actors = $dbh->prepare('SELECT * from acteurs');
    $all_actors->execute();

    $all_actors = $all_actors->fetchAll();

    return $all_actors;
}



?>