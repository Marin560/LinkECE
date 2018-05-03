<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id=$_SESSION['id'];
$profilpicture=$_SESSION['pp'];
$i=0;
include 'connexion_bdd.php';

if($db_found){
	

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
echo '
	<nav class="navbar navbar-default" id="tabcol">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="'.$repertoire.$pp.'" class="img-circle" height="30" alt="Avatar"></a>
			</div>
			<ul class="nav navbar-nav" >
				<li><a href="accueil.php">Accueil</a></li>
				<li><a href="reseau.php">Mon réseau</a></li>
				<li class="active"><a href="mur.php">Vous</a></li>
				<li><a href="notifications.php">Notifications</a></li>
				<li><a href="messagerie.php">Messagerie</a></li>
				<li ><a href="emplois.php">Emplois</a></li>
				<li ><a href="albums.php">Photos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
			</ul>
		</div>
	</nav>
	

	<div class="container text-center">
		<div class="row">
			<br><br>
		</div>

		<div class="row">
			<img src="'.$repertoire.$pp.'" class="img-rounded"  alt="Avatar">
		</div>
		<div class="row">
			<br>
			<button type="button" class="btn btn-primary btn-sm">Modifier la photo</button>
		</div>
		<br>
		<div class="row well ">
			<br>
			
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Prénom</label>
					<input type="firstname" class="form-control" id="prenom">

				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Nom</label>
					<input type="name" class="form-control" id="nom" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Activité</label>
					<select type="activite" class="form-control" id="Activite" >
						<option>Etudiant en licence</option>
						<option>Etudiant en master</option>
						<option>Etudiant apprenti</option>
						<option>Etudiant en recherche de stage</option>
						<option>Enseignant</option>
						<option>Employé</option>
					</select>
				</div>
			</form>
			<div class="col-sm-4">
				<div class="row">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Ville</label>
							<input type="city" class="form-control" id="ville">

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Age</label>
							<input type="age" class="form-control" id="age" >
						</div>

					</form>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<br><br><br><br><br><br><br><br>
				</div>
				<div class="row">
					<button type="button" class="btn btn-info btn-lg">Enregistrer les modifications</button>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Code Postale</label>
							<input type="postale" class="form-control" id="post">
						</div>
						<br>
						<label for="exampleInputEmail1">CV : </label>
						<button type="button" class="btn btn-danger btn-sm">Supprimer</button>
							<div class="form-group">
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
						
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
';

?>
</body>

</html>