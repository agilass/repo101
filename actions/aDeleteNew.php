<?php
session_start();
include ("models/modelNew.php");
SupprimerNew($_GET["newId"]);
header("location:index.php?action=listeNews&layout=Admin");

?>