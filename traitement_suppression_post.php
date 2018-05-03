<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire']; //Repertoire où trouver ses photos
$id=$_SESSION['id']; //Id de l'utilisateur en cours

//Connexion à la bdd
include 'connexion_bdd.php'; 


if(isset($_GET['id_publication'])){
    $id_publication = $_GET['id_publication'];
    
    echo "bonjour";
    
    if(db_found){
        
        echo "coucou";
        
        $sql = "DELETE FROM `publications` WHERE `id_publi`='".$id_publication."' AND `id_user`= '".$id."' ";
        mysqli_query($db_handle, $sql);

        //Je renvoie vers une nouvelle page
        //header("Location: emplois.php?afficher_candidatures=1");
        echo $id_publication;
    }
}
else {
    echo "oui";
}



?>