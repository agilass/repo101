<?php
session_start();
include ("models/modelNew.php");
SupprimerNew($_GET["newId"]);

// delete images from uploads folder
foreach (glob('uploads/*' . '*') as $file) {
    if (strpos($file, 'uploads/' . $_GET["newId"]) === 0) {
        unlink($file);
        // $_SESSION["tak"] = $file; //for checking if the condition worked 
    }
}
header("location:index.php?action=listeNews&layout=Admin");

?>