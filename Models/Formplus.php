<?php

function getGenders() {
    global $dbh;
    $all_genders = $dbh->prepare('SELECT * from genre ORDER BY genre ASC');
    $all_genders->execute();
    $all_genders = $all_genders->fetchAll();
    return $all_genders;
}

function getDirectors() {
    global $dbh;
    $all_directors = $dbh->prepare('SELECT * from realisateur ORDER BY nom ASC');
    $all_directors ->execute();
    $all_directors  = $all_directors ->fetchAll();
    return $all_directors ;
}


function getActors() {
    global $dbh;
    $all_actors = $dbh->prepare('SELECT * from acteurs ORDER BY nom ASC');
    $all_actors->execute();
    $all_actors = $all_actors->fetchAll();
    return $all_actors;
}


<?php 


require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$titre = $date = $nationalite = $synopsis = $image = "";
$error = "";
$success = false;

if(isset($_POST['submit'])) {
    
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $nationalite = $_POST['nationalite'];
    $synopsis = $_POST['synopsis'];
    $image = $_FILES["image"]["name"];
    $imagepath = 'assets/img/'.basename($image);
    // $upload = false;
    $success = true;

    if(empty($titre)){
        $error = "Merci de renseigner tous les champs";
        $success = false;
    }
    if(empty($date)){
        $error = "Merci de renseigner tous les champs";
        $success = false;
    }
    if(empty($nationalite)){
        $error = "Merci de renseigner tous les champs";
        $success = false;
    }
    if(empty($synopsis)){
        $error = "Merci de renseigner tous les champs";
        $success = false;
    }
    if (empty ($image)){
        $error = "Merci de renseigner tous les champs erreur image";
        $success = false;
    }
    else { $success = true;
       
    }

    if($success) {
        
        global $dbh;
        move_uploaded_file ($_FILES["image"]["tmp_name"] , $imagepath);
        $statement = $dbh->prepare('INSERT INTO films (titre, date, nationalite, synopsis, image) VALUES (?, ?, ?, ?, ?)');
        $statement->execute(array($titre, $date, $nationalite, $synopsis, $image));
        $error = "Votre film a bien été enregistré";
    }


}

function insertion() {
if(isset($_POST['submit'])) {
    $genre = $_POST['genre'];
    $realisateur = $_POST['realisateur'];
    $acteur = $_POST['acteur'];
    $success = true;
        if(empty($genre)){
            $error = "Merci de renseigner tous les champs";
            $success = false;
        }
        if(empty($realisateur)){
            $error = "Merci de renseigner tous les champs";
            $success = false;
        }
        if(empty($acteur)){
            $error = "Merci de renseigner tous les champs";
            $success = false;
        }
    global $dbh;
    $statement = $dbh->prepare('INSERT INTO genre (genre) VALUES (?);INSERT INTO  (nom) VALUES (?);INSERT INTO acteurs (nom) VALUES (?) WHERE id_film= $id ;');
    $statement->execute(array($genre,$realisateur,$acteur ));
    $error = "Votre film a bien été enregistré";
 	return $statement->fetchAll();