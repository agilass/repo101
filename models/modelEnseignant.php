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

function AjouterEnseignant($t)
{
    $cn = ouvrirConnexion();

    $Rq = "insert into enseignant values ('" . $t["ppr"] . "','" . $t["nomEns"] . "','" . $t["prenomEns"] . "','" . $t["matiere"] . "')";
    $resultat = $cn->exec($Rq);
    return $resultat;
}

function ModifierEnseignant($t)
{
    $cn = ouvrirConnexion();

    $Rq = "update enseignant set ppr='" . $t["ppr"] . "' , Nom='" . $t['nomEns'] . "', Prenom = '" . $t['prenomEns'] . "', matiere = '" . $t['matiereEns'] . "' where ppr ='" . $t['oldPpr'] . "'";
    $resultat = $cn->exec($Rq);
}

function SupprimerEnseignant($c)
{
    $cn = ouvrirConnexion();
    $Rq = "delete from enseignant where ppr='" . $c . "'";
    $resultat = $cn->exec($Rq);
}

function AfficherEnseignant($c)
{
    $cn = ouvrirConnexion();
    $Rq = "select * from enseignant where ppr='" . $c . "'";
    $resultat = $cn->query($Rq);
    return $resultat;

    //return $cn->query("select * from enseignant where Code='" . $c . "'");

}
function ExistEnseignant($c, $pw)
{
    $cn = ouvrirConnexion();
    $Rq = "select * from enseignant where nom='" . $c . "' AND ppr ='" . $pw . "'";
    $resultat = $cn->query($Rq)->rowCount();
    return $resultat;
}

function listeEnseignant()
{
    $cn = ouvrirConnexion();
    return $cn->query("select * from enseignant");
}

