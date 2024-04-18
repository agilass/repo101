<?php
session_start();
if (empty($_SESSION["login"])) {
    header("location:index.php?action=Login&user=Admin");
} else {
    // delete all previous value of $_SESSION related to the previous news
    $ids = array("Added", "tooBig", "errorUploading", "typeNotAllowed");
    foreach ($ids as $value) {
        unset($_SESSION[$value]);
    }
    // choose the corrected view
    $vue = "vNews.php";
}
?>