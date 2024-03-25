<?php
ob_start();
?>
<h1>Modifier un �tudiant </h1>
<hr /><br /><br />

<form name="ModifEtudiant" action="index.php?action=modifier" method="post">
    Ancien Code <input type="text" name="oldC" disabled value="<?php echo $etudiant['Code']; ?>" /> <br />

    <input type="hidden" name="oldC" value="<?php echo $etudiant['Code']; ?>" /> <br />
    Code <input type="text" name="C" value="<?php echo $etudiant['Code']; ?>"> <br />
    Nom <input type="text" name="N" value="<?php echo $etudiant['Nom']; ?>"> <br />
    Pr�nom <input type="text" name="P" value="<?php echo $etudiant['Pr�nom']; ?>"> <br />
    <input type="submit" value="Enregistrer" />
    <input type="reset" value="Annuler" onClick="history.go(-1)" />
</form>
<?php
$page = ob_get_clean();
?>