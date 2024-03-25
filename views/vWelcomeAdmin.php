<?php
ob_start();
?>
<div class="container dist">
    <h3>
        <?php echo "Bienvenue cher Administrateur " . $_SESSION["login"]; ?>
    </h3>
</div>
<?php
$page = ob_get_clean();
?>