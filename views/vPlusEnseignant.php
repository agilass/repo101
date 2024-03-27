<?php
ob_start();
?>
<div class="container mt-4">
    <h1 class="fa fa-user-plus fa-3x fa-align-right">Ajouter Un Enseignant</h1>
    <form id="formAddEns" method="POST" action="index.php?action=PlusEns">
        <div class="form-group">
            <label for="ppr">PPR : *</label>
            <input type="number" name="ppr" class="form-control" id="ppr" placeholder="Entrez votre PPR" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom : *</label>
            <input type="text" name="nomEns" class="form-control" id="nomEns" placeholder="Entrez votre nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom : *</label>
            <input type="text" name="prenomEns" class="form-control" id="prenomEns" placeholder="Entrez votre prénom"
                required>
        </div>
        <div class="form-group">
            <label for="matiere">Matière : *</label>
            <input type="text" name="matiere" class="form-control" id="matiere" placeholder="Entrez votre matière"
                required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    <div class="col-lg-offset-3 bgError">
        <h4 style="display:none;align-content: right;" id="Added">**Enseignant ajouté avec succés</h4>
    </div>
    <div class="col-lg-offset-3 bgError">
        <h4 style="display:none;align-content: right;" id="notAdded">**Probleme d'ajout d'enseignant, Essayer à
            nouveau ! </h4>
    </div>
    <?php if (!empty($_SESSION["Added"])) {
        echo ($_SESSION["Added"]);
        session_unset();
        session_destroy();
    }
    if (!empty($_SESSION["notAdded"])) {
        echo ($_SESSION["notAdded"]);
        session_unset();
        session_destroy();
    }
    ?>
</div>

<?php
$page = ob_get_clean();
?>