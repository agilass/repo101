<?php
ob_start();
session_start();
?>
<hr>
<div class="container mt-5"
    style="padding: 120px;background-image: url('img/login<?php echo $_GET["user"] ?>.png');background-repeat : repeat; ">
    <div class="bgTitle mx-auto text-center">
        <h3>Espace
            <?php echo $_GET["user"] ?>
        </h3>
    </div>
    <div class=" bgError">
        <h4 style="display:none;align-content: right;" id="error1">**Login ou mot de passe est incorrect
        </h4>
    </div>
    <div class="mx-auto text-center bgError">
        <h4 style="display:none;align-content: right;" id="error2">**tout les champs sont requis </h4>
    </div>
    <div class="row">
        <div class="form-horizontal col-md-9 mx-auto">
            <form method="POST" action="index.php?action=Connexion&user=<?php echo $_GET["user"]; ?>">
                <br>
                <div class="form-group">
                    <label for="nom" class=" col-sm-3 loginANDpwd"> <b><i>Login: </i></b></label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" id="login" name="login"
                            placeholder="Entrez votre identifiant"
                            value="<?php echo (isset($_SESSION["login"])) ? $_SESSION["login"] : ''; ?>" />
                    </div>
                </div><br>

                <div class=" form-group">
                    <div class="loginANDpwd col-sm-3"><label for="nom"> <b> <i>Password: </i></b></label></div>
                    <div class=" col-sm-9">
                        <input class="form-control" id="password" type="password"
                            value="<?php echo (isset($_SESSION["password"])) ? $_SESSION["password"] : ''; ?>"
                            name="password" placeholder="Entrez votre mot de passe" />

                    </div>
                </div><br>

                <div class="row">
                    <div class="col-lg-offset-3 col-lg-4"> <input type="submit" value="Se connecter"
                            class="btn btn-success btn btn-primary btn-md btn-block" /></div>
                    <div class="col-lg-4"> <input type="reset" value="Réinitialiser"
                            class="btn btn-danger btn btn-primary btn-md btn-block" />
                    </div>
                </div>
                <br><br>
            </form>
        </div>
    </div>
    <?php if (!empty($_SESSION["error1"])) {
        echo ($_SESSION["error1"]);
        session_unset();
        session_destroy();
    }
    if (!empty($_SESSION["error2"])) {
        echo ($_SESSION["error2"]);
        session_unset();
        session_destroy();
    }
    ?>
</div>

<br><br><br><br><br><br>
<?php
$page = ob_get_clean();
?>