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

function AjouterEtudiant($t)
{

	$cn = ouvrirConnexion();

	$Rq = "insert into etudiant values ('" . $t["C"] . "','" . $t["N"] . "','" . $t["P"] . "')";
	$resultat = $cn->exec($Rq);

}

function ModifierEtudiant($t)
{

	$cn = ouvrirConnexion();

	$Rq = "update etudiant set Code='" . $t["C"] . "' , Nom='" . $t['N'] . "', Pr�nom = '" . $t['P'] . "' where Code ='" . $t['oldC'] . "'";
	$resultat = $cn->exec($Rq);

}

function SupprimerEtudiant($c)
{

	$cn = ouvrirConnexion();
	$Rq = "delete from etudiant where Code='" . $c . "'";
	$resultat = $cn->exec($Rq);

}

function AfficherNew($c)
{

	$cn = ouvrirConnexion();
	$Rq = "select * from etudiant where الرمز='" . $c . "'";
	$resultat = $cn->query($Rq);
	return $resultat;

	//return $cn->query("select * from etudiant where Code='" . $c . "'");

}
function ExistEtudiant($c, $pw)
{
	$cn = ouvrirConnexion();
	$Rq = "select * from etudiant where nom='" . $c . "' AND code ='" . $pw . "'";
	$resultat = $cn->query($Rq)->rowCount();
	return $resultat;
}

function listeEtudiants()
{
	$cn = ouvrirConnexion();
	return $cn->query("select * from etudiant ORDER BY classe, num_classe;");
}

function listeEtudiants_classe($class)
{
	$cn = ouvrirConnexion();
	return $cn->query("select * from etudiant where classe='" . $class . "' ORDER BY classe, num_classe;");
}

