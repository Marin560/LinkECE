<?php  //Page de traitement php

session_start();

//Connexion à la base de données
include 'connexion_bdd.php';


if($db_found){
    
    
    //On vérifie que le mail existe bien dans la base de données    
    $sql = "SELECT id, prenom, pp,mdp FROM user WHERE mail = '".$_POST['email']."' ";
    
    $recu = mysqli_query($db_handle, $sql) ;
    $resultat = mysqli_fetch_assoc($recu);  
    
    //On vérifie qu'il est bien inscrit
    if($resultat['id'] != 0){ 
        
        echo "vous êtes bien inscrit".'<br/>';
        
        //Vérification avec les valeurs inscrites
        if($resultat['mdp']== $_POST['mdp']){            
            echo "Vous avez le bon mot de passe".'<br/>';
            
            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['pp'] = $resultat['pp'];
            $_SESSION['repertoire']= "images/";
            $_SESSION['id']= $resultat['id'];
           
            echo $resultat['prenom'].'<br/>';
            echo $resultat['pp'].'<br/>';
            echo $resultat['id'].'<br/>';
            
            header("Location: accueil.php" );
            
        } 
        else{
          echo "mauvais mot de passe";  
        }
            
    }
    else{
        echo "Adresse email non trouvée";
    }

}

else {
    echo "Probleme de connexion sql";   
}
    
?>

