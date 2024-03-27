<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Espace Etudiant</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet"><!--//font awesome-->
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="navbar navbar-inverse">
		<h3 id="salut">Bonjour
			<?php echo $_SESSION["login"]; ?>
		</h3>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="col-sm-3 col-md-2" id="service">
			<div class="collapse navbar-collapse " id="navbar-collapse">
				<br>
				<ul>

					<li> <a href="#"> <span class="fa fa-calendar"></span> Afficher l'emploi</a></li>
					<hr>
					<li><a href="#"> <span class="fa fa-vcard"></span> Gerer mon profil</a></li>
					<hr>
					<li><a href="#"> <span class="fa fa-book"></span> Cours</a></li>
					<hr>
					<li><a href="index.php?action=Deconnexion"> <span class="fa fa-user"></span> Deconnection</a></li>
					<hr>
				</ul>
			</div>
		</div>

		<div class="col-sm-9 col-md-10" id="contenu">
			<?php echo $page; ?>
		</div>
	</div>
	<script src="js/script.js"></script>
	<!-- jQuery link -->
	<script src="js/jquery-3.3.1.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>