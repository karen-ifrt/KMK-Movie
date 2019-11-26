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

function getDirectors() {
    global $dbh;
    $all_directors = $dbh->prepare('SELECT * from realisateur ORDER BY nom ASC');
    $all_directors ->execute();
    $all_directors  = $all_directors ->fetchAll();
    return $all_directors ;
}

function getGenders() {
    global $dbh;
    $all_genders = $dbh->prepare('SELECT * from genre ORDER BY genre ASC');
    $all_genders->execute();
    $all_genders = $all_genders->fetchAll();
    return $all_genders;
}
?>