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

function getOneActor($id_actor) {
    global $dbh;
    $one_actor = $dbh->prepare('SELECT * FROM acteurs WHERE id_acteur=?;');
    $one_actor->execute([$id_actor]);
    $one_actor->fetchAll();
    return $one_actor;

}


?>
