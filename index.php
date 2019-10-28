<?php
require ("model.php");
require ("view.php");
$formations = getFormations();
$etudiants = getEtudiants();

render_all($formations,'formation');
render_all($etudiants,'etudiant');

?>