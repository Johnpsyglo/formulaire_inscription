<?php
 
/*içi dans le try, je declare la variable $db*/ 
try{
    $db = new PDO('mysql:host=localhost;dbname=articles;charset=utf8' , 'root','');
}catch(PDOException $e){
    echo "erreur de la connexion a la bdd".$e->getMessage();
}


?>