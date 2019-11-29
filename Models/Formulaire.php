
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
    else { 
        $success = true;
       
    }

    if($success) {
        
        global $dbh;
        move_uploaded_file ($_FILES["image"]["tmp_name"] , $imagepath);
        $statement = $dbh->prepare('INSERT INTO films (titre, date, nationalite, synopsis, image) VALUES (?, ?, ?, ?, ?)');
        $statement->execute(array($titre, $date, $nationalite, $synopsis, $image));
        $error = "Votre film a bien été enregistré";
        header('Location: index.php?page=Formplus');
    }


}




