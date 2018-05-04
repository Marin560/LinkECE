<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire']; //Repertoire où trouver ses photos
$id=$_SESSION['id']; //Id de l'utilisateur en cours

//Connexion à la bdd
include 'connexion_bdd.php'; 


if(isset($_POST['Changer'])){
    echo "Changer";
}
else if(isset($_POST['Publier'])){
    echo "publier";
}

/*
if(isset($_POST['texte_user'])){   
    if(db_found){
        //Je fais ma requête SQL pour ajouter le poste
        $sql=" INSERT INTO `publications`( `id_user`, `type`, `nb_likes`, `lieu`, `date`, `confidentialite`, `description`) VALUES ('".$id."','a','0','Paris','10','1','".$_POST['texte_user']."') ";
        
        mysqli_query($db_handle, $sql) ;
        
        //On retourne sur la bonne page
        header("Location: mur.php");    
    }
}
else {
    echo "oui";
}


*/

?>