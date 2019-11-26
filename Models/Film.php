<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function getMovie($id) {
    global $dbh;
    $statement = $dbh->prepare('SELECT * FROM films WHERE id = ?');
    $statement->execute(array($id));
    $movies = $statement->fetch();
    return $movies;

}

function movieActor ($id){
    global $dbh;
    $statement = $dbh->prepare('SELECT jouer.id, jouer.id_Films, acteurs.nom, acteurs.image FROM ((jouer INNER JOIN films ON jouer.id_Films = films.id) INNER JOIN acteurs ON jouer.id = acteurs.id) WHERE films.id = ?');
    $statement->execute(array($id));
    $movieactor = $statement->fetchAll();
    return $movieactor;
}

function movieReal ($id){
    global $dbh;
    $statement = $dbh->prepare('SELECT realiser.id, realiser.id_realisateur, realisateur.nom FROM ((realiser INNER JOIN films ON realiser.id = films.id) INNER JOIN realisateur ON realiser.id_realisateur = realisateur.id) WHERE films.id = ?');
    $statement->execute(array($id));
    $moviereal = $statement->fetchAll();
    return $moviereal;

}

function myGenre($id) {
    global $dbh;
    $statement = $dbh->prepare('SELECT avoir.id, avoir.id_Films, genre.genre FROM ((avoir INNER JOIN films ON avoir.id_Films = films.id) INNER JOIN genre ON avoir.id = genre.id) WHERE films.id = ?');
    $statement->execute(array($id));
    $genremovie = $statement->fetchAll();
    return $genremovie;
}





?>