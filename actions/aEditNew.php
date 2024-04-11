<?php
session_start();
$vue = "vEditNew.php";
include ("models/modelNew.php");
if (isset($_SESSION["login"])) {
    if (isset($_GET["newId"])) {
        $new = AfficherNew($_GET["newId"]);
    } else {
        $new = AfficherNew($_SESSION["newIdEd"]);
    }

    if (!isset($_GET["er"])) {
        $ids = array("Added", "tooBig", "errorUploading", "typeNotAllowed");
        foreach ($ids as $value) {
            unset($_SESSION[$value]);
        }
    }

}