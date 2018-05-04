<?php

session_start();

$id_user=$_SESSION['id'];

//On ouvre la bdd
include 'connexion_bdd.php';

if((isset($_GET['ami_action']))&&(isset($_GET['bouton_action']))){
    
    $ami = $_GET['ami_action'];
    if(stripos($_GET['bouton_action'], 'Supprimer') !== FALSE) { //Si le bouton correspond à un bouton supprimer
        //On fait le traitement sql
        $sql = "DELETE FROM `amitie` WHERE `id1`= '".$id_user."' AND `id2`= '".$ami."' " ;
        mysqli_query($db_handle, $sql) ;

        //On relance la fenêtre actualisée;
        header("Location: reseau.php");
    }
    else{ 
        //On fait le sql pour ajouter l'ami - il va dans les nouvelles demandes d'amis
        $sql = "INSERT INTO `notifications` (`id_asker`, `id_receiver`) VALUES ('".$id_user."', '".$ami."') " ;
        mysqli_query($db_handle, $sql) ;
        
        
        header("Location: afficher_tous_utilisateurs.php?confirmation=Vous avez envoyé une nouvelle demande d'amis ");
    }
    

    
}

else{
    echo "ERROR - Aucune data n'a été reçue - Vérifier traitement_suppression_ami.php";
}

?>