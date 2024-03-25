<?php
session_start();
include("models\modelEnseignant.php");
if (empty($_SESSION["login"])) {
    header("location:index.php?action=Login&user=Admin");
} else {
    $var = AjouterEnseignant($_POST);
    if ($var == 1) {
        $_SESSION["Added"] = "<script>
        document.getElementById('Added').style.display='block';
        document.getElementById('Added').style.color='#ff0911';
        </script>";
        // $_SESSION["Added"] = $var;
        header("location:index.php?action=PlusEnseignant&layout=Admin");
    } else {
        $_SESSION["notAdded"] = "<script>
    document.getElementById('notAdded').style.display='block';
    document.getElementById('notAdded').style.color='#ff0911';
    </script>";
        // $_SESSION["notAdded"] = $var;
        header("location:index.php?action=PlusEnseignant&layout=Admin");
    }
}
?>