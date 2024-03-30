<?php
session_start();
if (empty($_SESSION["login"])) {
    header("location:index.php?action=Login&user=Admin&selectclass=");
} else {
    $vue = "vListeEtudiant.php";
    include ("models\modelEtudiant.php");
    $resultat = listeEtudiants_classe($_GET['selectclass']);
    $classes = listeClasse();

    if (empty($_GET['selectclass'])) {
        // $_GET['selectclass'] = "all";
        $resultat = listeEtudiants();
    }

}


?>