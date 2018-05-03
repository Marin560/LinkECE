<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id=$_SESSION['id'];

include 'connexion_bdd.php';

if($db_found){
	
	$sql = "SELECT DISTINCT prenom,nom,pp,mail FROM user INNER JOIN amitie WHERE id1='".$id."' ";
	$recu = mysqli_query($db_handle, $sql) ;
	$nom=array();
	$i=0;
}
else{
	die('Arrêt du script; Bdd non trouvée');
}

?>


<!DOCTYPE html>
<html>

<head>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
</head>
<body>
	<nav class="navbar navbar-default" id="tabcol">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="<?php echo $repertoire.$pp; ?>" class="img-circle" height="30" alt="Avatar"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="accueil.php">Accueil</a></li>
				<li class="active"><a href="reseau.php">Mon réseau</a></li>
				<li><a href="mur.php">Vous</a></li>
				<li><a href="notifications.php">Notifications</a></li>
				<li><a href="messagerie.php">Messagerie</a></li>
				<li><a href="emplois.php">Emplois</a></li>
				<li ><a href="albums.php">Photos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="container text-center">
		<div class="row">
			<p></p><br>
		</div>
		<div class="row">
			<form>
				<div class="form-group">
					<input type="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rechercher...">
				</div>
			</form>

			<?php 

			while ($resultat = mysqli_fetch_assoc($recu)) {

				$name[$i] = $resultat['prenom']." ".$resultat['nom'];
				$mail[$i]=$resultat['mail'];
				$profilpicture[$i]=$resultat['pp'];

			echo'
			
				<div class="col-sm-3">
					<div class="well">
						<p><a href="#">'.$name[$i].'</a></p>
						<img src="'.$repertoire.$profilpicture[$i].'" class="img-circle" height="65" width="65" alt="Avatar">
						<div class="row">
							<a href="mailto:jean-pierre.segado@ece.fr">'.$mail[$i].'</a></p>
						</div>
						<div class="row">
							<button type="button" class="btn btn-outline-secondary btn-xs">Supprimer</button>
							<button type="button" class="btn btn-outline-secondary btn-xs">Messagerie</button>
						</div>
					</div>
				</div>
			
			
			' ;
			$i++;

			};
			?>
		</div>
		
	</body>

	</html>