<?php
ob_start();
// session_start();
?>
<h3 class="text-center">liste des Enseignants </h3>
<hr />
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">PPR</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Matière</th>
            <th scope="col">Action</th>
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
                <td>
                    <div class="btn-group">
                        <a href="index.php?action=EditEns&layout=Admin&id=<?php echo $row[0]; ?>" role="button"
                            class="btn btn-success btn-lg"> <i class="fa fa-edit" style="color:white;">
                            </i>
                        </a>
                        <a href="index.php?action=DeleteEns&id=<?php echo $row[0]; ?>" role="button"
                            class="btn btn-danger btn-lg"><i class="fa fa-trash" style="color:white"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    <?php } ?>
</table>
<?php
$page = ob_get_clean();
?>