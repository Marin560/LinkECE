<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire']; //Repertoire où trouver ses photos
$id=$_SESSION['id']; //Id de l'utilisateur en cours

//Connexion à la bdd
include 'connexion_bdd.php'; 

//On postule pour l'offre
if(isset($_GET['id_offre'])){
    
    $offre_postulee = $_GET['id_offre'];
    echo $offre_postulee;
    
    //On fait la requête sql
    if($db_found){
        $sql = "DELETE FROM candidature WHERE id_offre_postulee = '".$offre_postulee."' AND id_candidat = '".$id."' ";
        mysqli_query($db_handle, $sql);
        
        //Je renvoie vers une nouvelle page
        header("Location: emplois.php?afficher_candidatures=1");
        
        
    }
    else{
	die('Arrêt du script; Bdd non trouvée');
}
}





?>