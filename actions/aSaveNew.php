<?php
session_start();
include ("models/modelNew.php");
if (isset($_SESSION["login"])) {
    ModifierNew($_POST);
    header("location:index.php?action=listeNews&layout=Admin");


}