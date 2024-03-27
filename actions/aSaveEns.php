<?php
session_start();
include("models/modelEnseignant.php");
if(isset($_SESSION["login"])) {
    ModifierEnseignant($_POST);
    header("location:index.php?action=listEnseignant&layout=Admin");


}