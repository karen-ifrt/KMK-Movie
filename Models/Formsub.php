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

function getLastMovie(){
    global $dbh;
    $statement = $dbh->prepare('SELECT * FROM films WHERE id=(select max(id) FROM films)');
    $statement->execute();
    $lastmovie = $statement->fetch();
    return $lastmovie;
}

// function test()
// {
//     global $dbh;
//     $maxid = $dbh->query('SELECT MAX(id) AS max_id, id FROM films');
//     $maxid = $maxid->fetch();
//     return $maxid;
// }