<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);




function getMovie($id) {
    global $dbh;

    $statement = $dbh->prepare('SELECT films.id, films.titre, films.date, films.nationalite, films.synopsis, films.image FROM films WHERE id = ?');
    $statement->execute(array($id));

    $movies = $statement->fetch();

    return $movies;

}

// function getOneActor($id_actor) {
//     global $dbh;
//     $one_actor = $dbh->prepare('SELECT * FROM acteurs WHERE id_acteur=?;');
//     $one_actor->execute([$id_actor]);
//     $one_actor->fetchAll();
//     return $one_actor;

// }


?>