<?php
ob_start();
?>
<div class="container mt-4">
    <h1 class="fa fa-plus-circle fa-2x "> Quoi de neuf ?</h1>

    <form id="formAddNews" action="index.php?action=Upload&layout=Admin" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="ppr">Titre : *</label>
            <input type="text" name="titre1" class="form-control" id="titre1" placeholder="Entrez le titre1" required>
        </div>
        <div class="form-group">
            <label for="nom">Sous Titre : *</label>
            <input type="text" name="titre2" class="form-control" id="titre2" placeholder="Entrez le titre2" required>
        </div>
        <div class="form-group">
            <label for="prenom">Sujet détaillé : *</label>
            <textarea type="text" name="sujet" class="form-control" id="sujet"
                placeholder="Écrivez le sujet en détail ici"></textarea>
        </div>
        <!-- MAX_FILE_SIZE must precede the file input field -->
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="50000" /> -->
        <div class="form-group">
            <label for="file">Image : *</label>
            <input type="file" name="file" class="form-control" id="file" placeholder="Entrez votre image" required>
        </div>
        <div class="form-group">
            <input type="submit" value="upload" name="submit">
        </div>
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