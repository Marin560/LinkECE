<?php  //Page de traitement php

session_start();

//Connexion à la base de données
include 'connexion_bdd.php';

if($db_found){
    //On vérifie que le mail existe bien dans la base de données    
    $sql = "SELECT id, prenom, pp, mdp, mail, nom FROM user WHERE mail = '".$_POST['email']."' ";
    
    $recu = mysqli_query($db_handle, $sql) ;
    $resultat = mysqli_fetch_assoc($recu);  
    
    //On vérifie qu'il est bien inscrit
    if($resultat['id'] != 0){ 
        
        echo "vous êtes bien inscrit".'<br/>';
        
        //Vérification avec les valeurs inscrites
        if($resultat['mdp']== $_POST['mdp']){            
            echo "Vous étiez".'<br/>';
            
            header("Location: accueil.php" );
            
        } 
        else{
          header("Location: connexion.php?information= Problème de connexion : Vérifiez votre mot de passe ou adresse email" );
        }
            
    }
    else{
        header("Location: connexion.php?information= Problème de connexion : Vérifiez votre mot de passe ou adresse email" );
    }

}

else {
    echo "Probleme de connexion sql";   
}
    
?>

