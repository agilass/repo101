<?php
ob_start();
?>
<div class="container mt-4">
    <h1 class="fa fa-edit fa-3x fa-align-right"> Modifier Une Nouveauté</h1>
    <form id="formAddnew" method="POST" action="index.php?action=saveNew&layout=Admin">
        <div class="form-group">
            <label for="newId"> newId : *</label>
            <input disabled name="newId" class="form-control" disabled value="<?php echo $new["newId"]; ?>" </div>

            <div class="form-group">
                <label for="titre1">titre1 : *</label>
                <input type="text" name="titre1" class="form-control" value="<?php echo $new["titre1"]; ?>">
            </div>

            <div class="form-group">
                <label for="titre2">titre2 : *</label>
                <input type="text" name="titre2" class="form-control" value="<?php echo $new["titre2"]; ?>">
            </div>
            <div class="form-group">
                <label for="prenom">sujet : *</label>
                <input type="text" name="sujet" class="form-control" value="<?php echo $new["sujet"]; ?>">
            </div>
            <div class="form-group">
                <label for="matiere">Path : *</label>
                <input type="text" name="path" class="form-control" value="<?php echo $new["path"]; ?>">
            </div>

            <input type="submit" class="btn btn-primary" value="Enregistrer">
            <input type="reset" value="Annuler" onClick="history.go(-1)" />
    </form>

</div>

<?php
$page = ob_get_clean();
?>