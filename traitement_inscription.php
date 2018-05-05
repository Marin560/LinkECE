<?php  
 
header('Location: connexion.php');
include 'connexion_bdd.php';

if($db_found){





//On vérifie que le mail existe bien dans la base de données   
$sql1 = "INSERT INTO user (mail, prenom, nom, mdp) VALUES ('".$_POST['email']."' , '".$_POST['prenom']."' , '".$_POST['nom']."' , '".$_POST['mdp']."' ) ";
	$recu1 = mysqli_query($db_handle, $sql1) ;

    $sql = "INSERT INTO informations (age, ville, code_postale) VALUES ( '".$_POST['age']."', '".$_POST['ville']."' , ".$_POST['postale']."')";
	$recu = mysqli_query($db_handle, $sql) ;

	
    
	}
	
	

else{
	die('Arrêt du script; Bdd non trouvée');
}

    
 

?>

