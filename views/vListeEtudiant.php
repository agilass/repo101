<?php
ob_start();
// session_start();
?>
<h3 class="text-center">liste des &eacute;tudiants </h3>
<hr />
<b>CLASSE :</b>
<select name="selectclass" id="classe" class="form-select" aria-label="Default select example" onchange="doReload()" ;>
    <option <?php if (empty($_GET["selectclass"])) {
        echo "selected";
    } ?>; value="">Toutes les classes</option>

    <?php while ($row = $classes->fetch()) { ?>
        <option <?php if ($row[0] == $_GET["selectclass"])
            echo "selected='selected'" ?> ; value="<?php echo $row[0];
        ?>">
            <?php echo $row[0]; ?>
        </option>
    <?php }
    ?>
</select>

<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ر_ت</th>
            <th scope="col">الرمز</th>
            <th scope="col">الاسم</th>
            <th scope="col">النسب</th>
            <th scope="col">النوع</th>
            <th scope="col">تاريخ الازدياد</th>
            <th scope="col">مكان الازدياد</th>
            <th scope="col">القسم</th>
        </tr>
    </thead>
    <?php while ($row = $resultat->fetch()) { ?>

        <tbody>
            <tr>
                <th scope="row"><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[0]; ?>
                    </a></th>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[1]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[2]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[3]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[4]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[5]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[6]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[7]; ?>
                    </a></td>
            </tr>
        </tbody>
    <?php } ?>
</table>

<?php
$page = ob_get_clean();
?>

<script>

    document.addEventListener('DOMContentLoaded', () => {
        const el = document.getElementsByTagName('select')[0];
        if (el) {
            addEventListener('change', (e) => {
                location = 'index.php?action=listeEtudiants&layout=Admin&selectclass=' + e.target.options[e.target.selectedIndex].value;
            });
        }
    });
</script>