<?php
ob_start();
// session_start();
?>
<h3 class="text-center">Liste des nouveautés </h3>
<hr />

<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Sous Titre</th>
            <th scope="col">Sujet</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <?php while ($row = $resultat->fetch()) { ?>

        <tbody>
            <tr>
                <th scope="row"><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[1]; ?>
                    </a></th>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[2]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[3]; ?>
                    </a></td>
                <td><a href='index.php?action=detail&Code=<?php echo $row[0] ?>'>
                        <?php echo $row[4]; ?>
                    </a></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success btn-lg"><a
                                href="index.php?action=EditNew&newId=<?php echo $row[0]; ?>&layout=Admin"><i
                                    class="fa fa-edit" style="color:white;">
                                </i></a></button>
                        <button type="button" class="btn btn-danger btn-lg"><a
                                href="index.php?action=DeleteNew&newId=<?php echo $row[0]; ?>"><i class="fa fa-trash"
                                    style="color:white"></i></a></button>
                    </div>
                </td>

            </tr>
        </tbody>
    <?php } ?>
</table>

<?php
$page = ob_get_clean();
?>