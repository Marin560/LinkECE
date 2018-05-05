<?php  
 session_start();

$id = $_SESSION['id'];

header('Location: infos.php');

include 'connexion_bdd.php';

if($db_found){
	
	
}
else{
	die('Arrêt du script; Bdd non trouvée');
}

    
    //On vérifie que le mail existe bien dans la base de données    
    $sql = "UPDATE informations SET age = '".$_POST['age']."', ville='".$_POST['ville']."' WHERE id_user='".$_SESSION['id']."'";
	mysqli_query($db_handle, $sql) ;

	$sql1 = "UPDATE user SET prenom = '".$_POST['prenom']."', nom = '".$_POST['nom']."', mdp='".$_POST['mdp']."' WHERE id='".$_SESSION['id']."'";
	mysqli_query($db_handle, $sql1) ;

    //Traitement photo de profil
    //On vérifie que c'est la bonne extension
    if(isset($_FILES['fichierpp'])){
            $infosfichier = pathinfo($_FILES['fichierpp']['name']);
            $extension_pp = $infosfichier['extension'];
            $extensions_ok_pp = array('jpg', 'jpeg', 'png');

            if (in_array($extension_pp, $extensions_ok_pp)){

                //On récupère le nom de l'ancien fichier 
                $sql = "SELECT pp FROM user WHERE id = '".$id."' ";
                $recu= mysqli_query($db_handle, $sql) ;
                $resultat = mysqli_fetch_assoc($recu); //Le nom de la photo

                $pp= $resultat['pp'];

                $nom = "C:\MAMP\htdocs\LinkECE\LinkECE\images\PhotoProfil\\".$pp;

                echo "fichier supprime du dossier".$nom.'<br/>';

                //On supprime l'ancien fichier
                unlink ($nom);

                //On met le nouveau à la place
                $nom2 = "C:\MAMP\htdocs\LinkECE\LinkECE\images\PhotoProfil\pp".$id.".".$extension_pp;

                move_uploaded_file($_FILES['fichierpp']['tmp_name'],$nom2);
                $nomfichier = "pp".$id.".".$extension_pp;

                echo "nouveaunom".$nomfichier.'<br/>';

                $sql2 = "UPDATE user SET pp = '".$nomfichier."' WHERE id = '".$id."' ";
                echo $sql2;
                $recu= mysqli_query($db_handle, $sql2) ;

                $_SESSION['pp'] = $nomfichier;

            }
    }
    if(isset($_FILES['fichiercv'])){
            
        echo "oui";
        
            $infosfichier = pathinfo($_FILES['fichiercv']['name']);
            $extension_pp = $infosfichier['extension'];
            $extensions_ok_pp = array('pdf');

            if (in_array($extension_pp, $extensions_ok_pp)){

                $nom = "C:\MAMP\htdocs\LinkECE\LinkECE\images\CV\curu".$id.".pdf";
                
                //On supprime l'ancien fichier
                unlink ($nom);

                //On met le nouveau à la place
                $nom2 = "C:\MAMP\htdocs\LinkECE\LinkECE\images\CV\curu".$id.".pdf";
                
                echo $nom2;
                
                move_uploaded_file($_FILES['fichiercv']['tmp_name'],$nom2);
                
                

            }
    }





?>

