<?php
ob_start();
?>
<div class="container dist">
    <h3>
        <?php echo "Bienvenue Monsieur " . $_SESSION["login"]; ?>
    </h3>


</div>
<?php
$page = ob_get_clean();
?>