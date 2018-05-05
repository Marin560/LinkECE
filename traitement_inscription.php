<?php  

session_start();

header('Location: connexion.php');
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
    
    //Traitement cv
    //On vérifie que c'est la bonne extension
    $infosfichier = pathinfo($_FILES['fichiercv']['name']);
    $extension_cv = $infosfichier['extension'];
    echo $extension_cv;
    $extensions_ok_cv = array('pdf');
        
    if (in_array($extension_cv, $extensions_ok_cv)){
         echo $extension_cv;
         $nom = "C:\MAMP\htdocs\LinkECE\LinkECE\images\CV\cv".$id_nouveau.".".$extension_cv;
         echo $nom;
         move_uploaded_file($_FILES['fichiercv']['tmp_name'],$nom);
    }
    
    
    //Traitement photo de profil
    //On vérifie que c'est la bonne extension
    $infosfichier = pathinfo($_FILES['fichierphoto']['name']);
    $extension_pp = $infosfichier['extension'];
    $extensions_ok_pp = array('jpg', 'jpeg', 'png');
        
    if (in_array($extension_pp, $extensions_ok_pp)){
         
        $nom = "C:\MAMP\htdocs\LinkECE\LinkECE\images\PhotoProfil\pp".$id_nouveau.".".$extension_pp;
        move_uploaded_file($_FILES['fichierphoto']['tmp_name'],$nom);
        $nomfichier = "pp".$id_nouveau.".".$extension_pp;
        echo $nomfichier;
        
        //On met à jour le nom de la photo dans la base de donnée
        $sql = "UPDATE `user` SET `pp`= '".$nomfichier."' WHERE `id`= '".$id_nouveau."' ";
        mysqli_query($db_handle, $sql);
        
    }
    
    
   
    
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

