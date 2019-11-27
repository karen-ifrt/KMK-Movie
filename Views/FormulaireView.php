<?php
$title = "Formulaire";
include 'header.php';
?>

<body>
<div class="container">
	<div class="formulaire">
	<div class="title-form">Nouveau film</div>
	<div class="title-form2">Ajout film </div>


	<form method="post" action="index.php?page=Formplus">
		<label for="titre">Titre du film</label>
		<input type="text" name="titre"><br>
		<label for="date">Année de sortie</label>
		<input type="number" name="date"><br>
		<label for="nationalite">Nationalité</label>
		<input type="text" name="nationalite"><br>
		<label for="synopsis">Synopsis</label>
		<textarea name="synopsis" id="description" cols="30" rows="10"></textarea><br>
		<label class="col-form-label " for="affiche film">Affiche du film</label>
		<input class="form-control" type="file" name="pic" accept="image/*">
		<input type="submit" name="submit" value="Envoyer">
		<p class="error"><?php echo $error ?></p>

	</form>

</body>
</html>