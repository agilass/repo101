<!-- gabarit == template == القالب -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site de formation smi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet"> <!--font awesome-->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="partie1.html">
                            <span class="fa fa-university"> SMI fsdm</span>
                            <!--<img src="./img/pic1.png" alt="logo">-->
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!--menu-->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php?action=Accueil"><span class="fa fa-home"></span>
                                    ACCEUIL</a></li>
                            <li><a href="index.php?action=Presentation"><span class="fa fa-mortar-board"></span>
                                    PRESENTATION</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown"><span class="fa fa-user"></span> VOTRE ESPACE</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?action=Login&user=Etudiant"><span
                                                class="fa fa-user-circle-o"></span> ESPACE
                                            ETUDIANT</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=Login&user=Ensignant"><span
                                                class="fa fa-user-circle-o"></span> ESPACE
                                            ENSIGNANT</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=Login&user=Admin"><span
                                                class="fa fa-user-circle-o"></span> ESPACE
                                            ADMIN</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?action=Accueil#contact">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /Navigation -->
        </div>
    </header>


    <!-- afficher n'importe quelle view vous voulez -->
    <div id="main">
        <?php echo $page; ?> <!--$page indique je pense le contenu de la variable $page :$page = ob_get_clean()-->
    </div>


    <footer>
        <div class="container">
            <div class="col-md-12">
                <div class="footer-copyright"><br>
                    <span>© Copyright 2018. All Rights Reserved. | This template is made with
                        <i class="fa fa-heart-o" aria-hidden="true">
                        </i> by <a href="https://www.fsdmfes.ac.ma">fsdm</a>
                        </br>
                        <p><em><strong><span style="font-size:14px; color:#11ff00;">ann&eacute;e universitaire
                                        2017/2018</span></strong></em></p>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <!-- jQuery link -->
    <script src="js/jquery-3.3.1.js"></script> <!-- !!! jquery first and and after bootstrap js-->
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>