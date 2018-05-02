<?php

session_start();

            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['pp'] = $resultat['pp'];
            $_SESSION['repertoire']= "images/";
            
include 'traitement_connexion.php';

$nbamis = mysqli_query("SELECT COUNT(id1) FROM amitie WHERE `id1` = '".$resultat['id1']."' ");

echo "<h2>PHP is Fun!</h2>" ;

?>