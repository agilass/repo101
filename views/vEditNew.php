<?php
ob_start();
?>
<div class="container mt-4">
    <h1 class="fa fa-edit fa-3x fa-align-right"> Modifier Une Nouveauté</h1>
    <form id="formAddnew" method="POST" action="index.php?action=saveNew&layout=Admin">
        <div class="form-group">
            <label for="newId"> newId : *</label>
            <input readonly name="newIdEd" class="form-control" value="<?php echo $new["newId"]; ?>" </div>

            <div class="form-group">
                <label for="titre1">titre1 : *</label>
                <input type="text" name="titreEd1" class="form-control" value="<?php echo $new["titre1"]; ?>">
            </div>

            <div class="form-group">
                <label for="titre2">titre2 : *</label>
                <input type="text" name="titreEd2" class="form-control" value="<?php echo $new["titre2"]; ?>">
            </div>
            <div class="form-group">
                <label for="prenom">sujet : *</label>
                <input type="text" name="sujetEd" class="form-control" value="<?php echo $new["sujet"]; ?>">
            </div>
            <div class="form-group">
                <label for="matiere">Path : *</label>
                <input type="text" name="pathEd" class="form-control" value="<?php echo $new["path"]; ?>">
            </div>

            <input type="submit" class="btn btn-primary" value="Enregistrer">
            <input type="reset" value="Annuler" onClick="history.go(-1)" />
    </form>

</div>

<?php
$page = ob_get_clean();
?>