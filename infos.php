<?php
 
session_start();
 
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id=$_SESSION['id'];
$profilpicture=$_SESSION['pp'];
$i=0;
include 'connexion_bdd.php';
 
if($db_found){
  
  $sql1 = "SELECT prenom, nom, age, ville, mdp, cv FROM informations INNER JOIN user ON id_user=id WHERE `id_user`='".$id."'";
  $recu1 = mysqli_query($db_handle, $sql1) ;
  
}
else{
  die('Arrêt du script; Bdd non trouvée');
}
 
?>
 
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="general.css">
 
 
</head>
 
<body>
 
<?php
//Vérification s'il faut afficher les candidatures ou non 