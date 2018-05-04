<?php  
 session_start();
 header('Location: infos.php');

include 'connexion_bdd.php';

if($db_found){
	
	
}
else{
	die('Arrêt du script; Bdd non trouvée');
}

    
    //On vérifie que le mail existe bien dans la base de données    
    $sql = "UPDATE informations SET age = '".$_POST['age']."', ville='".$_POST['ville']."' WHERE id_user='".$_SESSION['id']."'";
	$recu = mysqli_query($db_handle, $sql) ;

	$sql1 = "UPDATE user SET prenom = '".$_POST['prenom']."', nom = '".$_POST['nom']."', mdp='".$_POST['mdp']."' WHERE id='".$_SESSION['id']."'";
	$recu1 = mysqli_query($db_handle, $sql1) ;




?>

