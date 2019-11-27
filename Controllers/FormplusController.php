<?php

require ('Models/Formplus.php');

$all_acteurs = getActors();
$all_realisateurs = getDirectors();
$all_genres = getGenders();

require ('Views/FormplusView.php');