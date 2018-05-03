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
        
        $sql = "INSERT INTO `candidature`(`id_offre`, `id_candidat`) VALUES ('".$offre_postulee."','".$id."') ";
        mysqli_query($db_handle, $sql);
        
        //Je renvoie vers une nouvelle page
        header("Location: emplois.php?confirmation=Vous avez bien postulé pour cette offre");
        
    }
    else{
	die('Arrêt du script; Bdd non trouvée');
}
}





?>