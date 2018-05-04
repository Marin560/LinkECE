<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire']; //Repertoire où trouver ses photos
$id_user=$_SESSION['id']; //Id de l'utilisateur en cours

//Connexion à la bdd
include 'connexion_bdd.php'; 

//On postule pour l'offre
if(isset($_GET['id_publi'])&&(isset($_GET['action']))){
    $id_publication_aimee = $_GET['id_publi'];

    //Vérifie si on veut liker ou non
    if (stripos($_GET['action'], 'J\'aime') !== FALSE) {
        
        //On fait la requête sql
        if($db_found){
            
            echo "on like";
            
            //On ajoute un like à la publication
            $sql = "UPDATE publications Set nb_likes=nb_likes+1 where id_publi = '".$id_publication_aimee."'";
            mysqli_query($db_handle, $sql);

            //On inscrit le j'aime dans la table publi_aimee
            $sql = "INSERT INTO `publi_aimee`(`id_publi`, `id_user`) VALUES ('".$id_publication_aimee."','".$id_user."')";
            mysqli_query($db_handle, $sql);

            //Je renvoie vers une nouvelle page
            header("Location: accueil.php");
        }
        else{
           die('Arrêt du script; Bdd non trouvée'); 
        } 
    }
    //On annule le j'aime de la page
    else { 
        //On fait la requête sql
        if($db_found){
            
            echo "on ne like pas";
            
            //On ajoute un like à la publication
            $sql = "UPDATE publications Set nb_likes=nb_likes-1 where id_publi = '".$id_publication_aimee."'";
            mysqli_query($db_handle, $sql);

            //On inscrit le j'aime dans la table publi_aimee
            $sql = "DELETE FROM `publi_aimee` WHERE `id_publi`= '".$id_publication_aimee."' AND `id_user`= '".$id_user."' ";
            mysqli_query($db_handle, $sql);

            //Je renvoie vers une nouvelle page
            header("Location: accueil.php");
        }
        else{
           die('Arrêt du script; Bdd non trouvée'); 
        } 
        
    }
    
    
}





?>