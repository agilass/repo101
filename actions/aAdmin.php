<?php
session_start();
empty($_SESSION["login"]) ? header("location:index.php?action=Login&user=Admin") : $vue = "vWelcomeAdmin.php";

