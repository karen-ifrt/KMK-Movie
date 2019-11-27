<?php
$title = "Formulaire";
include 'header.php';
?>

<body>
	<h1>Ajouter le genre, les acteurs, les réalisateurs</h1>

	<form method="post" action="">
		<label for="titre">Titre du film</label>
		<input type="text" name="titre"><br>
		<label for="date">Année de sortie</label>
		<input type="number" name="date"><br>
		<label for="nationalite">Nationalité</label>
		<input type="text" name="nationalite"><br>
		<label for="synopsis">Synopsis</label>
		<textarea name="synopsis" id="description" cols="30" rows="10"></textarea><br>
		<input type="submit" name="submit" value="Envoyer">
		<p class="error"><?php echo $error ?></p>

	</form>

</body>

</html>