<?php  //Page de traitement php

//Connexion à la base de données
$database = "linkECE"; //Nom de la base de donnée à choisir 
$db_handle = mysqli_connect("localhost", "root", "root"); //On ouvre la base de données avec Mysqli

$db_found = mysqli_select_db($db_handle, $database);

if($db_found){
    echo "Connexion à la base de donnée réussie".'</br>';
    
    //On vérifie que le mail existe bien dans la base de données    
    $sql = "SELECT id FROM user WHERE mail = '".$_POST['email']."' ";
    
    $recu = mysqli_query($db_handle, $sql) ;
    $resultat = mysqli_fetch_assoc($recu);
    
    //On vérifie qu'il est bien inscrit
    if($resultat['id'] != 0){ 
        echo "Vous êtes bien inscrits".'<br/>';
        
        //Je récupère le mot de passe et les autres informations 
        $sql = "SELECT `id`,`prenom`,`pp`, `mdp`, `admin`,`num_activite`,`nb_amis` FROM `user` WHERE `mail` = '".$_POST['email']."' ";

        $recu = mysqli_query($db_handle, $sql) ;
        $resultat = mysqli_fetch_assoc($recu);

        //Vérification avec les valeurs inscrites
        if( ($resultat['mdp']== $_POST['mdp'])){            
            
            echo "Vous avez le bon mot de passe".'<br/>';

            $sql = "SELECT COUNT(id1) AS nb FROM amitie WHERE `id1` = '".$resultat['id']."' ";
    
            $recu = mysqli_query($db_handle, $sql) ;
            $resultat2 = mysqli_fetch_assoc($recu);
            
            session_start();

            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['pp'] = $resultat['pp'];
            $_SESSION['repertoire']= "images/";
            $_SESSION['test'] = $resultat2['nb'];
       

            header("Location: accueil.php" );
            
          
        } 
        else {
            echo "mot de passe incorrect";
        }
    }
    else {
        echo "Adresse mail non inscrite dans la bdd";
    }
}

?>

