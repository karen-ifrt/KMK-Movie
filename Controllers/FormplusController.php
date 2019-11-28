<?php

require ('Models/Formplus.php');

$all_acteurs = getActors();
$all_realisateurs = getDirectors();
$all_genres = getGenders();
// if (isset($_POST['submit'])) {
//     $new_genre=$_POST['genre'];
//     $new_realisateur=$_POST['realisateur'];
//     $new_acteur=$_POST['acteur'];
//     // $insert = $insertion();
// }

require ('Views/FormplusView.php');