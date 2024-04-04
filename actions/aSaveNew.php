<?php
session_start();
include ("models/modelNew.php");
if (isset($_SESSION["login"])) {
    echo (implode($_POST));
    ModifierNew($_POST);
    header("location:index.php?action=listeNews&layout=Admin");

}