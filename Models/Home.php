<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function getMovie() {
    global $dbh;
    $all_movies = $dbh->prepare('SELECT * from films ORDER BY titre ASC');
    $all_movies->execute();
    $all_movies = $all_movies->fetchAll();
    return $all_movies;
}

function getActors() {
    global $dbh;
    $all_actors = $dbh->prepare('SELECT * from acteurs ORDER BY nom ASC');
    $all_actors->execute();
    $all_actors = $all_actors->fetchAll();
    return $all_actors;
}

?>