<?php
ob_start();
?>
<div class="container mt-4">
    <h1 class="fa fa-edit fa-3x fa-align-right"> Modifier Une Nouveauté</h1>

    <form id="formAddNews" action="index.php?action=SaveNew&layout=Admin" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="newId"> newId : *</label>
            <input readonly name="newIdEd" class="form-control" value="<?php echo $new["newId"]; ?>" </div>

            <div class="form-group">
                <label for="titreEd1">titre1 : *</label>
                <input type="text" name="titreEd1" class="form-control" value="<?php echo $new["titre1"]; ?>" required>
            </div>

            <div class="form-group">
                <label for="titreEd2">titre2 : *</label>
                <input type="text" name="titreEd2" class="form-control" value="<?php echo $new["titre2"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="sujetEd">sujet : *</label>
                <input type="text" name="sujetEd" class="form-control" value="<?php echo $new["sujet"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="file">Image : *</label>
                <input type="file" name="file" class="form-control" id="file" value="<?php echo $new["path"]; ?>">
            </div>

            <input type="submit" class="btn btn-primary" value="Enregistrer" name='submit'>
            <input type="reset" value="Annuler" onClick="history.go(-1)" />
    </form>

    <div class="col-lg-offset-3">
        <h4 style="display:none;align-content: right;" id="Added">** News ajouté avec succès</h4>
    </div>
    <div class="col-lg-offset-3 ">
        <h4 style="display:none;align-content: right;" id="tooBig">**your file is too big !, Essayer à
            nouveau ! </h4>
    </div>
    <div class="col-lg-offset-3 ">
        <h4 style="display:none;align-content: right;" id="errorUploading">**there was an error uploading your file !!
        </h4>
    </div>
    <div class="col-lg-offset-3 ">
        <h4 style="display:none;align-content: right;" id="typeNotAllowed">**you cannot upload files of this type !
        </h4>
    </div>
    <?php
    $ids = array("Added", "tooBig", "errorUploading", "typeNotAllowed");
    foreach ($ids as $value) {
        if (!empty($_SESSION[$value])) {
            echo ($_SESSION[$value]);
            // session_unset();
            // session_destroy();
        }
    }
    ?>
</div>
<?php
$page = ob_get_clean();
?>