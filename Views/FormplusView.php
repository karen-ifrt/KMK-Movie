<?php
$title = "Formplus";
include 'header.php';
?>

<body>
	<h1>Ajouter le genre, les acteurs, les réalisateurs</h1>

	<form method="post" action="">
		<label for="genre">genre du film</label>
		<select name="genre">
            <?php
            echo '<option >Choisissez un genre</option>';
            foreach ($all_genres as $genre) {
			echo '<option>'. $genre['nom'].'</option>';
			};
			?>
		</select>
		<label for="realisateur">Réalisateur</label>
		<select name="realisateur">
            <?php
            echo '<option>Choisissez un realisateur</option>';
            foreach ($all_realisateurs as $realisateur) {
			echo '<option>'. $realisateur['nom'].'</option>';
			};
			?>
		</select>
		<label for="acteur">Acteurs</label>
		<select name="acteur">
		<?php
		echo '<option>Choisissez un acteur</option>';
                    foreach ($all_acteurs as $acteur) {
                        echo '<option>'. $acteur['nom'] .'</option>';
					};   ?>
		</select>
		<input type="submit" name="submit" value="Envoyer">
	</form>
</body>

</html>