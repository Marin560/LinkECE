<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<nav class="navbar navbar-default" id="tabcol">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="<?php echo $repertoire.$pp; ?>" class="img-circle" height="30" alt="Avatar"></a>
			</div>
			<ul class="nav navbar-nav" >
				<li><a href="accueil.php">Accueil</a></li>
				<li><a href="reseau.php">Mon réseau</a></li>
				<li><a href="mur.php">Vous</a></li>
				<li class="active"><a href="notifications.php">Notifications</a></li>
				<li><a href="messagerie.php">Messagerie</a></li>
				<li><a href="emplois.php">Emplois</a></li>
				<li ><a href="albums.php">Photos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
                <li><a href="afficher_tous_utilisateurs.php"><span class="glyphicon glyphicon-search "></span>Rechercher un User</a></li>
				<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
			</ul>
		</div>
	</nav>
	<div class="container text-center">
		<div class="row"><br><br></div>
		<div class="row">
			<div class="col-sm-2"><br></div> 
			<div class ="col-sm-8"> 

				<div class="col-sm-3"> <img src ="images/diego.jpg" class="img-circle" height ="65" width="65"></div>


				<div class="col-sm-9"> 
					<div class="well"><p>Félicitez Diego Bazin pour son nouveau poste de stagiaire chez UPTOO</p> <button type="button" class="btn btn-info">Féliciter</button>
					</div>

				</div>

			</div>
			<div class="col-sm-2"><br></div> 
		</div>
		<div class="row">
			<div class="col-sm-2"><br></div> 
			<div class ="col-sm-8"> 

				<div class="col-sm-3"> <img src ="images/albane.jpg" class="img-circle" height ="65" width="65"></div>


				<div class="col-sm-9"> 
					<div class="well"><p> Félicitez Albane Rouaix pour son nouveau poste de stagiaire chez Havas </p> <button type="button" class="btn btn-info">Féliciter</button></div>

				</div>

			</div>
			<div class="col-sm-2"><br></div> 
		</div>
		<div class="row">
			<div class="col-sm-2"><br></div> 
			<div class ="col-sm-8"> 

				<div class="col-sm-3"> <img src ="images/marin.jpg" class="img-circle" height ="65" width="65"></div>


				<div class="col-sm-9"> 
					<div class="well"><p>Marin Boone a accepté votre demande d'ajout</p><button type="button" class="btn btn-info">Envoyer un message</button>
						<button type="button" class="btn btn-info">Retirer la relation</button>

					</div>

				</div>

			</div>
			<div class="col-sm-2"><br></div> 
		</div>
		<div class="row">
			<div class="col-sm-2"><br></div> 
			<div class ="col-sm-8"> 

				<div class="col-sm-3"> <img src ="images/antoine.jpg" class="img-circle" height ="65" width="65"></div>


				<div class="col-sm-9"> 
					<div class="well"><p>Antoine Ewald souhaite vous ajouter à son réseau</p><button type="button" class="btn btn-info">Accepter</button> <button type="button" class="btn btn-info">Ignorer</button>
</div>

				</div>

			</div>
			<div class="col-sm-2"><br></div> 
		</div>



	</div>

</body>