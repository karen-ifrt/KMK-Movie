<?php 


require('db.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$titre = $date = $nationalite = $synopsis = "";
$error = "";
$success = false;

if(isset($_POST['submit'])) {
    
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $nationalite = $_POST['nationalite'];
    $synopsis = $_POST['synopsis'];
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

    if($success) {
        global $dbh;
        $statement = $dbh->prepare('INSERT INTO films (titre, date, nationalite, synopsis) VALUES (?, ?, ?, ?)');
        $statement->execute(array($titre, $date, $nationalite, $synopsis));
        $error = "Votre film a bien été enregistré";
    }


}
