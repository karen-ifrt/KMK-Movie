<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function getReal($id){
    global $dbh;
    $statement = $dbh->prepare('SELECT * FROM realisateur WHERE id = ?');
    $statement->execute(array($id));
    $real = $statement->fetch();
    return $real;
}


function realMoviePic($id){
    global $dbh;
    $statement = $dbh->prepare('SELECT realiser.id, realiser.id_realisateur, films.titre,films.image FROM ((realiser INNER JOIN films ON realiser.id = films.id) INNER JOIN realisateur ON realiser.id_realisateur = realisateur.id) WHERE realisateur.id = ?');
    $statement->execute(array($id));
    $realpic = $statement->fetchAll();
    return $realpic;
}


?>

