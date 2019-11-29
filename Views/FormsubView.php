<?php
$title = "Formsub";
include 'header.php';
?>

<body>
	<div class="container">

		<div class="title-form">Votre film a bien été enregistré</div>

		<div class="card-form">

			<div class="row">

				<div class="col-md-6 offset-md-3">
					<?php
					echo '<p class="last-title">' . $mylast['titre'] . '</p>';

					echo '<img class="img-thumbnail" src="assets/img/' . $mylast['image'] . '">';

					echo '<div class="movie-link"><a href="index.php?page=film&film=' . $mylast['id'] . '">Voir la fiche</a></div>';
					?>
				</div>
			</div>

		</div>


	</div>