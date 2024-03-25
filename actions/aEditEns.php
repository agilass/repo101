<?php
session_start();
$vue = "vEditEns.php";
include("models/modelEnseignant.php");
if(isset($_SESSION["login"])) {
    $ens = AfficherEnseignant($_GET["id"]);

}