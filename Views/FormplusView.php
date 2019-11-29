<?php
$title = "Formplus";
include 'header.php';
?>

<body>
	
	<div class="container">

		<div class="title-form">Ajout film</div>
		<div class="title-form2">Ajoutez genre, acteurs et réalisateurs pour votr film</div>
		<div class="formulaire">

			<form method="post" action="">
				<div class="form-group ">
					<label class="col-form-label " for="genre">Genre du film</label>
					<select name="genre" class="form-control" id="genre">
						<?php
						echo '<option >Choisissez un genre</option>';
						foreach ($all_genres as $genre) {
							echo '<option value="' . $genre['id'] . '">' . $genre['genre'] . '</option>';
						};

						?>
					</select>
					<label class="col-form-label "for="realisateur">Réalisateur</label>
		<select name="realisateur"class="form-control">
            <?php
			echo '<option>Choisissez un realisateur</option>';
			foreach ($all_realisateurs as $realisateur) {
			echo '<option value="' . $realisateur['id'] . '">'. $realisateur['nom'].'</option>';
			};
			?>
		</select>
		<label class="col-form-label " for="acteur">Acteurs</label>
		<select name="acteur"class="form-control">
		<?php
		echo '<option>Choisissez un acteur</option>';
		            foreach ($all_acteurs as $acteur) {
		                echo '<option value="' . $acteur['id'] . '">'. $acteur['nom'] .'</option>';
					};   
		?>
		</select>
					<input class="btn-valider" type="submit" name="submit" value="Envoyer">
				</div>
			</form>
		</div>
		<div class="retour">
            <a href="index.php?page=allfilms" class="btn-retour">
                <img src="assets/img/replayyyyy.svg" alt="">
                <p>Retour</p>
            </a>
        </div>
	</div>
	</div>
	<?php include 'footer.php';
	?>