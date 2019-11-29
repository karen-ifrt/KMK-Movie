<?php

require('db.php');

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


function getGenders()
{
    global $dbh;
    $all_genders = $dbh->prepare('SELECT * from genre ORDER BY genre ASC');
    $all_genders->execute();
    $all_genders = $all_genders->fetchAll();
    return $all_genders;
}

function getDirectors()
{
    global $dbh;
    $all_directors = $dbh->prepare('SELECT * from realisateur ORDER BY nom ASC');
    $all_directors->execute();
    $all_directors  = $all_directors->fetchAll();
    return $all_directors;
}


function getActors()
{
    global $dbh;
    $all_actors = $dbh->prepare('SELECT * from acteurs ORDER BY nom ASC');
    $all_actors->execute();
    $all_actors = $all_actors->fetchAll();
    return $all_actors;
}

function test()
{
    global $dbh;
    $maxid = $dbh->query('SELECT MAX(id) AS max_id, id FROM films');
    $maxid = $maxid->fetch();
    return $maxid;
}



    if (isset($_POST['submit'])) {
        global $dbh;
        $maxid = $dbh->query('SELECT MAX(id) AS max_id, id FROM films');
        $maxid = $maxid->fetch();
        $genre = $_POST['genre'];
        $realisateur = $_POST['realisateur'];
        $acteur = $_POST['acteur'];
        $myid = $maxid['max_id'];
        $success = true;
        if (empty($genre)) {
            $error = "Merci de renseigner tous les champs";
            $success = false;
        }
        if (empty($realisateur)) {
            $error = "Merci de renseigner tous les champs";
            $success = false;
        }
        if (empty($acteur)) {
            $error = "Merci de renseigner tous les champs";
            $success = false;
        }

        if($success){
        global $dbh;
        $statement = $dbh->prepare('INSERT INTO avoir (id, id_Films) VALUES (?, ?); INSERT INTO jouer (id, id_Films) VALUES (?, ?); INSERT INTO realiser (id, id_realisateur) VALUES (?, ?) ');
        $statement->execute(array($genre, $myid, $acteur, $myid, $myid, $realisateur));
        header('Location: index.php?page=Formsub');

        }

        // $statement->execute(array($genre,$realisateur,$acteur ));
        // $error = "Votre film a bien été enregistré";
    }
