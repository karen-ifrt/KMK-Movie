<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function getGenre($id){
    global $dbh;
    $statement = $dbh->prepare('SELECT * FROM genre WHERE id = ?');
    $statement->execute(array($id));
    $genre = $statement->fetch();
    return $genre;
}

function movieGenre($id){
    global $dbh;
    $statement = $dbh->prepare('SELECT avoir.id, avoir.id_Films, films.titre,films.image FROM ((avoir INNER JOIN films ON avoir.id_Films = films.id) INNER JOIN genre ON avoir.id = genre.id) WHERE genre.id = ?');
    $statement->execute(array($id));
    $moviegenre = $statement->fetchAll();
    return $moviegenre;
}