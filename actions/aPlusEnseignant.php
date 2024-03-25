<?php
session_start();
if(empty($_SESSION["login"])) {
    header("location:index.php?action=Login&user=Admin");
} else {
    $vue = "vPlusEnseignant.php";
}
?>