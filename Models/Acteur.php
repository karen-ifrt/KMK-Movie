<?php

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function getActor($id) {
    global $dbh;
    $statement = $dbh->prepare('SELECT * FROM acteurs WHERE id = ?');
    $statement->execute(array($id));
    $actor = $statement->fetch();
    return $actor;
}

function actorMovie ($id){
    global $dbh;
    $statement = $dbh->prepare('SELECT jouer.id, jouer.id_Films, films.titre FROM ((jouer INNER JOIN films ON jouer.id_Films = films.id) INNER JOIN acteurs ON jouer.id = acteurs.id) WHERE acteurs.id = ?');
    $statement->execute(array($id));
    $actormovie = $statement->fetchAll();
    return $actormovie;
}


?>