<?php
$title = "Formulaire";
include 'header.php';
?>

<body>
<div class="container">
	<div class="formulaire">
	<div class="title-form">Ajout film</div>

	<form method="post" action="index.php?page=Formplus">
	<div class="form-group ">
		<label class="col-form-label " for="titre">Titre du film</label>
		<input class="form-control" type="text" name="titre"><br>
		<label class="col-form-label " for="date">Année de sortie</label>
		<input class="form-control" type="number" name="date"><br>
		<label class="col-form-label " for="nationalite">Nationalité</label>
		<input class="form-control" type="text" name="nationalite"><br>
		<label class="col-form-label " for="synopsis">Synopsis</label>
		<textarea class="form-control" name="synopsis" id="description" cols="30" rows="4"></textarea><br>
		<label class="col-form-label "class="col-form-label " for="affiche film">Affiche du film</label>
		<input class="form-control" type="file" name="pic" accept="image/*">
		<input class="btn-valider" type="submit" name="submit" value="Envoyer">
		<p class="error"><?php echo $error ?></p>
	</div>
	</form>
	</div>

	
</div>
</body>
</html>