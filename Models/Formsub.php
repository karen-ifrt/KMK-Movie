<?php 

require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$error = "";
$success = false;



// function insertion() {
// if(isset($_POST['submit'])) {
//     $genre = $_POST['genre'];
//     $realisateur = $_POST['realisateur'];
//     $acteur = $_POST['acteur'];
//     $success = true;
//         if(empty($genre)){
//             $error = "Merci de renseigner tous les champs";
//             $success = false;
//         }
//         if(empty($realisateur)){
//             $error = "Merci de renseigner tous les champs";
//             $success = false;
//         }
//         if(empty($acteur)){
//             $error = "Merci de renseigner tous les champs";
//             $success = false;
//         }
//     global $dbh;
//     $statement = $dbh->prepare('INSERT INTO genre (genre) VALUES (?);INSERT INTO  (nom) VALUES (?);INSERT INTO acteurs (nom) VALUES (?) WHERE id_film= $id ;');
//     $statement->execute(array($genre,$realisateur,$acteur ));
//     $error = "Votre film a bien été enregistré";
//      return $statement->fetchAll();
     