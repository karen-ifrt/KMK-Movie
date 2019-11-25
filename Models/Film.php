<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function getMovie($id) {
    global $dbh;
    $statement = $dbh->prepare('SELECT films.id, films.titre, films.date, films.nationalite, films.synopsis, films.image FROM films WHERE id = ?');
    $statement->execute(array($id));
    $movies = $statement->fetch();
    return $movies;

}



?>