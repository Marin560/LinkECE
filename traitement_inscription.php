<?php  

session_start();

//header('Location: connexion.php');
include 'connexion_bdd.php';



if($db_found){
    
    //On insère les données dans la bdd
    $sql1 = "INSERT INTO user (mail, prenom, nom, mdp) VALUES ('".$_POST['email']."' , '".$_POST['prenom']."' , '".$_POST['nom']."' , '".$_POST['mdp']."' ) ";
    mysqli_query($db_handle, $sql1) ;

    $sql = "INSERT INTO informations (age, ville, code_postale) VALUES ( '".$_POST['age']."', '".$_POST['ville']."' , ".$_POST['postale']."')";
    mysqli_query($db_handle, $sql) ;
    
    //On récupère l'id du nouvel utilisateur
    $sql = "SELECT id FROM user WHERE mail= '".$_POST['email']."' ";
    $recu = mysqli_query($db_handle, $sql) ;
    $resultat = mysqli_fetch_assoc($recu); 
    
    $id_nouveau = $resultat['id'];
    
    $infosfichier = pathinfo($_FILES['fichier']['name']);
    $extention = $infosfichier['extension'];
    
    $nom = "C:\MAMP\htdocs\LinkECE\LinkECE\images\CV\cv".$id_nouveau.".".$extention;
    move_uploaded_file($_FILES['fichier']['tmp_name'],$nom);
    
    
    /*
    
    {
          // Teste de la taille
          if ($_FILES['photoId']['size'] <= 1000000)
          {
              // Teste de l'extension
              $infosfichier = pathinfo($_FILES['photoId']['name']);
              $extension_upload = $infosfichier['extension'];
              $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
              if (in_array($extension_upload, $extensions_autorisees))
              {
                      // Validation

                      $_SESSION['photo']="\Projet_Piscine\PhotoID\PhotoID".$_SESSION['id'].".".$extension_upload;
                      move_uploaded_file($_FILES['photoId']['tmp_name'], "C:\wamp64\www\Projet_Piscine\PhotoID\PhotoID".$_SESSION['id'].".".$extension_upload);
              }
          }
    }

*/
    
    
    
    
}	
else{
    
    die('Arrêt du script; Bdd non trouvée');
}


?>

