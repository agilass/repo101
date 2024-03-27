<?php
include("models\modelNew.php");
$resultat = listeNews();
// die("< pre>" . print_r(count($resultat)) . "< /pre>");
$vue = "vAccueil.php";

