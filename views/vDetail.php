<?php
ob_start();
?>

<h1>D�tail d'un �tudiant</h1>
<hr /><br /><br />

Code :
<?php echo $etudiant["Code"]; ?> <br />
Nom :
<?php echo $etudiant["Nom"]; ?><br />
Pr�nom :
<?php echo $etudiant["Pr�nom"]; ?><br />
<hr />
<a href='index.php?action=formModif&Code=<?php echo $etudiant["Code"]; ?>'>Modifier</a>
<a href='index.php?action=supprimer&Code=<?php echo $etudiant["Code"]; ?>'
    onClick="return confirm('&ecirc;tes-vous s&ucirc;r de vouloir supprimer cet &eacute;l&eacute;ment');">Supprimer</a>


</table>

<?php
$page = ob_get_clean();
?>