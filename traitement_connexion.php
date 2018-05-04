<?php  //Page de traitement php

session_start();

//Connexion à la base de données
include 'connexion_bdd.php';
$alibitch=0;
if($db_found){
    


    if (isset($_POST['Valider'])){
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

                $_SESSION['prenom'] = $resultat['prenom'];
                $_SESSION['pp'] = $resultat['pp'];
                $_SESSION['repertoire'] = "images/";
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['mail'] = $resultat['email'];
                $_SESSION['nom'] = $resultat['nom'];

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
       else  if(isset($_POST['Modifier'])) {

    
        $sql2 = "SELECT mail FROM user WHERE admin= '1' AND mail= '".$_POST['email']."'";
        $recu2 = mysqli_query($db_handle, $sql2);
       

                    while( $resultat2=mysqli_fetch_assoc($recu2)){
  
                     header("Location: modifier.php");
                     $alibitch=1;
                    
                };
            

              if($alibitch!=1){
                   
                     header("Location: connexion.php?information= Problème de connexion : Vous n'etes pas admin" );
                  }



}
} 

else {
    echo "Probleme de connexion sql";   
}
    
?>

