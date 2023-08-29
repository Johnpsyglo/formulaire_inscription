
<?php
require_once('include/header.php');?>


<div class="center">
    <h1>Admin Luv Resval</h1>
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'add_article') {

            /*permet de charger de recupérer different information dans la base de donnée*/
            if (isset($_POST['submit'])) {

            }


            ?>
            <h3>Ajouter un article</h3>
             /*permet d'apporter des image a partir du formulaire dans le fichier*/
            <form method="POST" action="" enctype="multipart/form-data"><br><br>
                <input type="text" name="titre" placeholder="Entrer le titre de l'article" 
                required="" class="form form-control"><br>
                <textarea name="contenu" placeholder="Entrer le contenu de l'article" class=
                "form form-control"></textarea><br>
                <input type="file" name="fichier"><br><br>
                <input type="submit" name="submit" class="btn btn-primary"> /*submit qui est un btn d'envoie*/
            </form>

            <?php
        }
       
     }


    ?>
</div>






?>