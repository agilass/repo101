<?php
session_start();
empty($_SESSION["login"]) ? header("location:index.php?action=Login&user=Enseignant") : $vue = "vWelcomeEnseignant.php";

