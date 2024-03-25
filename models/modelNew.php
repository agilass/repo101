<?php

function afficherDate()
{
	/////La date sur le serveur
	$jours = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
	$d = getdate();

	$wj = $d["wday"];
	$mj = $d["mday"];
	$m = $d["mon"];
	$y = $d["year"];

	$d = $jours[$wj] . " " . $mj . "/" . $m . "/" . $y;
	return $d;
}

//connexion � la base de donn�es
function ouvrirConnexion()
{
	$user = 'root';
	$password = '';
	$db = 'mysql:host=localhost;dbname=mz2023';
	try {
		$cn = new PDO($db, $user, $password);
	} catch (PDOException $dbex) {
		die("Erreur de connexion : " . $dbex->getMessage());
	}
	return $cn;
}

function AjouterNew($t)
{

	$cn = ouvrirConnexion();
	$Rq = "insert into new values ('" . $t["id"] . "','" . $t["titre1"] . "','" . $t["titre2"] . "','" . $t["sujet"] . "','" . $t["path"] . "')";
	$resultat = $cn->exec($Rq);

}

function ModifierNew($t)
{

	$cn = ouvrirConnexion();

	$Rq = "update New set newId='" . $t["C"] . "' , Nom='" . $t['N'] . "', Pr�nom = '" . $t['P'] . "' where Code ='" . $t['oldC'] . "'";
	$resultat = $cn->exec($Rq);

}

function SupprimerNew($c)
{

	$cn = ouvrirConnexion();
	$Rq = "delete from new where newId='" . $c . "'";
	$resultat = $cn->exec($Rq);

}

function AfficherNew($c)
{

	$cn = ouvrirConnexion();
	$Rq = "select * from new where newId='" . $c . "'";
	$resultat = $cn->query($Rq);
	return $resultat;

	//return $cn->query("select * from New where Code='" . $c . "'");

}
function ExistNew($c, $pw)
{
	$cn = ouvrirConnexion();
	$Rq = "select * from new where nom='" . $c . "' AND code ='" . $pw . "'";
	$resultat = $cn->query($Rq)->rowCount();
	return $resultat;
}

function listeNews()
{
	$cn = ouvrirConnexion();
	return $cn->query("select * from new ;");
}

function listeNews_classe($class)
{
	$cn = ouvrirConnexion();
	return $cn->query("select * from new where classe='" . $class . "' ORDER BY classe, num_classe;");
}

