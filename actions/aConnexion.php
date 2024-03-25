<?php
// isset function in PHP is used to determine whether a variable is set or not.
//  A variable is consid='red' as a set variable if it has a value other than NULL
session_start();
// aider l'uilisateur a ne pas retaper un champ en cas d'erreur
$_SESSION["login"] = $_POST["login"];
$_SESSION["password"] = $_POST["password"];

include("models\model" . $_GET['user'] . ".php");

if (!empty($_POST["login"]) && !empty($_POST["password"])) {

    switch ($_GET['user']) {
        case "Etudiant":
            $resultat = existEtudiant($_POST["login"], $_POST["password"]);
            break;
        case "Enseignant":
            $resultat = existEnseignant($_POST["login"], $_POST["password"]);
            break;
        case "Admin":
            if ($_POST["login"] == "MAAZOU" && $_POST["password"] == "sub7analah")
                $resultat = 100;
            else
                $resultat = -100;
            break;
    }
    // if (!empty($_POST["login"]) || !isset($_POST["password"])) {
    if ($resultat > 0) {
        header("location:index.php?action=" . $_GET['user'] . "&layout=" . $_GET['user']);
        exit();
    } else {  //indiquer que l'un des 2 est incorrect mot de passe ou login 
        $_SESSION["error1"] = "<script>
        document.getElementById('error1').style.display='block';
        document.getElementById('error1').style.color='#ff0911';
        </script>";
        header("location:index.php?action=Login&user=" . $_GET['user']);
        exit();
    }
} else { // demander d'entrer le mot de passe ou le login car l'un d'eux est vide
    $_SESSION["error2"] = "<script>
    document.getElementById('error2').style.display='block';
    document.getElementById('error2').style.color='#ff3010';
    </script>";
    header("location:index.php?action=Login&user=" . $_GET['user']);
    exit();
}
?>