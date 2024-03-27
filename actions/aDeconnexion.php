<?php
session_start();
session_unset();
session_destroy();
// include("index.php");
// $vue = "vAccueil.php";
header("location:index.php");
exit();
?>