<?php
ob_start();
?>
<div class="container dist">

    hello from vEtudiant
    <h1>
        <?php echo "Bienvenue cher étudiant " . $_SESSION["login"]; ?>
    </h1>
</div>
<?php
$page = ob_get_clean();
?>