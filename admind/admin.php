
<?php
require_once('include/header.php');?>


<div class="center">
    <h1>Ma Formulaire pret</h1>
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'add_article') {

            
            if (isset($_POST['submit'])) {

            }


            ?>
            <h3>Ajouter un article</h3>
             /*permet d'apporter des image a partir du formulaire dans le fichier*/
            <form method="POST" action="" enctype="multipart/form-data"><br><br>

                <input type="text" name="Nom" placeholder="Nom" 
                require pattern="[a-z]+"  maxlength="20" class="form form-control"><br>

                <input type="email" name="email" placeholder="email" 
                required max="30" maxlength="30" class="form form-control"><br>  <!-- maxlength="7" permet de limiter les texte -->

                <label for="phone">Numero de telephone:</label><br><br>
                <input type="tel" name="quantity" placeholder="0692" 
                required min="1" required max="10" maxlength="10" class="form form-control"><br>

                <!-- <label for="pass">Password (8 characters minimum):</label> -->
                <input type="password" id="pass" name="password" 
                minlength="8" required /><br><br>

               

                <!-- <input type="file" name="fichier"><br><br> -->
                <!-- <input type="submit" name="submit" class="btn btn-primary"> submit qui est un btn d'envoie -->
                <input type="submit" value="Sign in" />
            </form>

            <?php
        }
       
     }


    ?>
</div>
 <!-- <textarea name="contenu" placeholder="Entrer le contenu de l'article" class=
                "form form-control"></textarea><br> -->

                <!-- permet de charger de recupérer different information dans la base de donnée*/
            if (isset($_POST['submit'])) { -->




?>