<?php
$title = "Formulaire";
include 'header.php';
?>
<body>
	<h1>Nouveau Film</h1>

<form method="post" action="">
	<label for="titre">Titre du film</label>
	<input type="text" name="titre"><br>
	<label for="date">Année de sortie</label>
	<input type="text" name="date"><br>
	<label for="description">Synopsis</label>
	<input type="text" name="description"><br>
	<label for="realisateur">Réalisateur</label>
	<input type="text" name="realisateur"><br>
	<label for="genre">Genre</label>
	<input type="text" name="genre"><br>
	<input type="submit" name="valider" value="Envoyer">
	</form>

</body>
</html>