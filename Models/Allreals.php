<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function getDirectors() {
    global $dbh;
    $all_directors = $dbh->prepare('SELECT * from realisateur ORDER BY nom ASC');
    $all_directors ->execute();
    $all_directors  = $all_directors ->fetchAll();
    return $all_directors ;
}