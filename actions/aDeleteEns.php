<?php
session_start();
include("models/modelEnseignant.php");
SupprimerEnseignant($_GET["id"]);
header("location:index.php?action=listEnseignant&layout=Admin");

?>