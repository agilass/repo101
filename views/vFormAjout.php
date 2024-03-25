<?php
ob_start();
?>
<h1>Ajouter un �tudiant </h1>
<hr /><br /><br />

<form name="ajoutEtudiant" action="index.php?action=ajouter" method="post">
    Code <input type="text" name="C"> <br />
    Nom <input type="text" name="N"> <br />
    Pr�nom <input type="text" name="P"> <br />
    <input type="submit" value="Enregistrer" />
    <input type="reset" value="Annnuler" />
</form>
<?php
$page = ob_get_clean();
?>