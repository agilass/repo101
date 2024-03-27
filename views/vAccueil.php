<?php
ob_start();
?>
<div class="bgimage">
    </br></br></br></br></br></br></br></br>
    <h1 class="head1"><b> Welcome <br />to our website !</b>
    </h1>
</div><br /><br />
<!-- nouveautes -->
<div class="container dist">
    <section class="col-lg-6">
        <center><span class="fa fa-newspaper-o"></span></center>
        <h1 class="text col-xs-offset-3 col-sm-offset-2">
            <center><b>Nouveautes</b></center>
        </h1></br></br>
        <div class="carousel slide" id="screenshot" data-ride="carousel">
            <div class="carousel-inner">
                <?php $count = 0;
                $row = $resultat->fetchAll();
                for ($i = count($row) - 1; $i >= 0; $i--) { ?>
                    <div class="<?php if ($i === count($row) - 1)
                        echo "item active";
                    else
                        echo "item"; ?>">
                        <img src="<?php echo $row[$i][4]; ?>" alt="text">
                        <div class="carousel-caption">
                            <h3>
                                <?php echo $row[$i][1]; ?>
                            </h3>
                            <p>
                                <?php echo $row[$i][2]; ?>
                            </p>
                        </div>
                    </div>
                    <?php
                } ?>
            </div><!--fin carousel-inner-->
            <ol class="carousel-indicators">
                <li data-target="#screenshot" data-slide-to="0" class="active"></li>
                <?php for ($c = 1; $c <= count($row); $c++) { ?>
                    <li data-target="#screenshot" data-slide-to="<?php echo $c; ?>"></li>
                <?php } ?>
            </ol>
            <a href="#screenshot" class="left carousel-control" data-slide="prev">
                <span class="fa fa-chevron-left"></span>
            </a>
            <a href="#screenshot" class="right carousel-control" data-slide="next">
                <span class="fa fa-chevron-right"></span>
            </a>
        </div><!--fin carousel-->
        <br>
    </section>
    <section class="col-lg-6">
        <center><span class="fa fa-newspaper-o"></span></center>
        <h1 class="text col-xs-offset-3 col-sm-offset-2">
            <center><b>Actualites</b></center>
        </h1></br></br>
        <h3><a href="#">International Conference on Intelligent Systems and Computer Vision </a></h3>
        <h3><a href="#">Prix d’Excellence «Khadija Baddouri» en Sciences de la Vie Edition 2018 </a></h3>
        <h3><a href="#">Résultats des contrôles de Rattrapage Semestre Automne Hiver 2017-2018</a> </h3>
        <h3><a href="#">اخر الأخبار يمكنكم مشاهدتهم من هنا </a> </h3>
        <button type="button" class="btn btn-primary pull-right">afficher plus</button>
    </section>
</div>
<hr>
<!--fin actualite-->
<a name="contact"></a>
<div class="container">
    <h1 class="contact"><b>Contactez nous</b></h1>
    <div class="col-md-6 col-xs-12">
        <center><span class="fa fa-phone"></span></center>
        <h3 class="col-xs-offset-3 col-sm-offset-2">
            <b>Telephone</b><br>+212624277333
        </h3><br>
        <center><span class="fa fa-envelope"></span></center>
        <h3 class="col-xs-offset-3 col-sm-offset-2">
            <b>Adresse e-mail</b><br>mohammed.maazou@usmba.ac.ma
        </h3>
    </div>
    <div class="dist col-md-6 col-xs-12">
        <form action="#" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="text" class="form-control" id="email" placeholder="Entrez votre e-mail">
            </div>
            <div class="form-group">
                <label for="tel">Telephone :</label>
                <input type="tel" class="form-control" id="tel" placeholder="Entrez votre numero de telephone">
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Entrez votre message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Envoyer</button>
        </form>
    </div>
</div>
<hr>
<?php
$page = ob_get_clean();
?>