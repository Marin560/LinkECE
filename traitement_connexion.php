<?php  //Page de traitement php

//Connexion à la base de données
<<<<<<< HEAD
=======
$database = "test"; //Nom de la base de donnée à choisir 
$db_handle = mysqli_connect("localhost", "root@localhost", ""); //On ouvre la base de données avec Mysqli
>>>>>>> 033321fb96fab1eb3a6d814ed40b4fed85922d1a


$database = "linkece"; //identifier le nom de base de données
$port= '3307';
$login= 'root';
$mdp= 'root';
$db_handle = mysqli_connect('localhost', $login, $mdp, $database, $port); //On ouvre la base de données avec Mysqli
$db_found = mysqli_select_db($db_handle, $database);

if($db_found){
    echo "Connexion à la base de donnée réussie".'</br>';
    echo $_POST['email'].'<br/>';
    
    
    //On vérifie que le mail existe bien dans la base de données    
    $sql = "SELECT id FROM user WHERE mail = '".$_POST['email']."' ";
    
    $recu = mysqli_query($db_handle, $sql) ;
    $resultat = mysqli_fetch_assoc($recu);  
    
    //On vérifie qu'il est bien inscrit
    if($resultat['id'] != 0){ 
        echo "Vous êtes bien inscrits".'<br/>';
        
        //Je récupère le mot de passe et les autres informations 
<<<<<<< HEAD
        $sql = "SELECT `id`, `mdp`, `admin` FROM `user` WHERE `mail` = '".$_POST['email']."' ";
=======
        $sql = "SELECT `id`,`prenom`,`pp`, `mdp`, `admin`,`num_activite`,`nb_amis` FROM `user` WHERE `mail` = '".$_POST['email']."' ";
>>>>>>> 033321fb96fab1eb3a6d814ed40b4fed85922d1a

        $recu = mysqli_query($db_handle, $sql) ;
        $resultat = mysqli_fetch_assoc($recu);

        //Vérification avec les valeurs inscrites
<<<<<<< HEAD
        if( ($resultat['mdp']== $_POST['mdp'])){
          
        header("Location: accueil.php" );
=======
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
            
          
>>>>>>> 033321fb96fab1eb3a6d814ed40b4fed85922d1a
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

