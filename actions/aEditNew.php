<?php
session_start();
$vue = "vEditNew.php";
include ("models/modelNew.php");
if (isset($_SESSION["login"])) {
    $new = AfficherNew($_GET["newId"]);

}