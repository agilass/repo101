<?php
ob_start();
?>
<div class="container mt-4">
    <h1 class="fa fa-user-plus fa-3x fa-align-right">Modifier Un Enseignant</h1>
    <form id="formAddEns" method="POST" action="index.php?action=saveEns&layout=Admin">
        <div class="form-group">
            <label for="oldPpr"> Ancien PPR : *</label>
            <input type="hidden" name="oldPpr" class="form-control" disabled value="<?php echo $ens["ppr"]; ?>" </div>
            <div class="form-group">
                <label for="ppr">Nouveau PPR : *</label>
                <input type="number" name="ppr" class="form-control" value="<?php echo $ens["ppr"]; ?>">
            </div>
            <div class="form-group">
                <label for="nom">Nom : *</label>
                <input type="text" name="nomEns" class="form-control" value="<?php echo $ens["nom"]; ?>">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom : *</label>
                <input type="text" name="prenomEns" class="form-control" value="<?php echo $ens["prenom"]; ?>">
            </div>
            <div class="form-group">
                <label for="matiere">Matière : *</label>
                <input type="text" name="matiereEns" class="form-control" value="<?php echo $ens["matiere"]; ?>">
            </div>

            <input type="submit" class="btn btn-primary">Enregistrer</input>
            <input type="reset" value="Annuler" onClick="history.go(-1)" />
    </form>

</div>

<?php
$page = ob_get_clean();
?>