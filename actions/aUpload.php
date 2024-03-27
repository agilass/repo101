<?php
session_start();
$vue = "vNews.php";
$ids = array("Added", "tooBig", "errorUploading", "typeNotAllowed");
include("models/modelNew.php");

if (empty($_SESSION["login"])) {
    header("location:index.php?action=Login&user=Admin");
} else {
    // if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    //     (die"< pre>" . print_r($_POST) . "< /pre>");
    // }
    if (isset($_POST["submit"])) {
        // if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $file = $_FILES["file"];

        // The size, in bytes, of the uploaded file
        $file_size = $_FILES["file"]['size'];
        //The original name of the file on the client machine.
        $file_name = $_FILES["file"]['name'];
        //The temporary filename of the file in which the uploaded file was stored on the server.
        $fileTmpName = $_FILES["file"]['tmp_name'];
        //The MIME type of the file, if the browser provided this information.
        $file_type = $_FILES["file"]['type'];
        //The error code associated with the file upload. If it's UPLOAD_ERR_OK (0), there is no error.
        $file_error = $_FILES["file"]['error'];
        // echo "< pre>" . print_r($_FILES) . "< /pre>";

        // explode()function splits a string into an array based on a specified delimiter
        $file_ext = explode('.', $file_name);
        // end() function moves the internal pointer to, and outputs, the last element in the array.
        $fileActualExt = strtolower(end($file_ext));
        echo $fileActualExt;
        $allowed = array('jpg', 'jpeg', 'png');
        // in_array() function searches an array for a specific value
        if (in_array($fileActualExt, $allowed)) {
            // echo "passed";
            if ($file_error === 0) {
                if ($file_size < 50000000) { // almost 5 Mo 
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = "uploads/" . $fileNameNew;
                    $_POST["path"] = $fileDestination;
                    $_POST["id"] = explode('.', $fileNameNew)[0];
                    // move_uploaded_file() function moves an uploaded file to a new destination
                    move_uploaded_file($fileTmpName, $fileDestination);
                    AjouterNew($_POST);
                    echo "passed";
                    foreach ($ids as $value) {
                        unset($_SESSION[$value]);
                    }
                    header("location:index.php?action=Upload&layout=Admin&ajouter=oui");
                    $_SESSION["Added"] = "<script>
                        document.getElementById('Added').style.display='block';
                        document.getElementById('Added').style.color='#ff0911';
                        </script>";

                } else {
                    foreach ($ids as $value) {
                        unset($_SESSION[$value]);
                    }
                    $_SESSION["tooBig"] = "<script>
                        document.getElementById('tooBig').style.display='block';
                        document.getElementById('tooBig').style.color='#ff0911';
                        </script>";
                    header("location:index.php?action=Upload&layout=Admin&toobig");
                }

            } else {
                foreach ($ids as $value) {
                    unset($_SESSION[$value]);
                }
                $_SESSION["errorUploading"] = "<script>
                document.getElementById('errorUploading').style.display='block';
                document.getElementById('errorUploading').style.color='#ff0911';
                </script>";
                header("location:index.php?action=Upload&layout=Admin&codeError=" . strval($file_error));
            }
        } else {
            foreach ($ids as $value) {
                unset($_SESSION[$value]);
            }
            $_SESSION["typeNotAllowed"] = "<script>
        document.getElementById('typeNotAllowed').style.display='block';
        document.getElementById('typeNotAllowed').style.color='#ff0911';
        </script>";
            header("location:index.php?action=Upload&layout=Admin&typenotAllowed");
        }
    }

}