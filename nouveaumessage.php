	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="messagerie.css">		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="general.css">

	</head>
	<body>
		<nav class="navbar navbar-default" id="tabcol">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="alienor.png" class="img-circle" height="30" alt="Avatar"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="accueil.php">Accueil</a></li>
				<li><a href="reseau.php">Mon réseau</a></li>
				<li><a href="mur.php">Vous</a></li>
				<li><a href="notifications.php">Notifications</a></li>
				<li class="active"><a href="messagerie.php">Messagerie</a></li>
				<li><a href="emplois.php">Emplois</a></li>
				<li ><a href="albums.php">Photos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
			</ul>
		</div>
	</nav>
		<div class="container-fluid">
			<div class="row">
				<p><br></p>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-3 well">
					<div class="row">
						<div class="well">
							<input type="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rechercher...">
						</div>
						<div class="well">
							<a href="#">Aliénor Rouaix<br>Hi</a>
						</div>
						<div class="well">
							<a href="#">Aliénor Rouaix<br>Hi</a>
						</div>
						<div class="well">
							<a href="#">Aliénor Rouaix<br>Hi</a>
						</div>
						<div class="well">
							<a href="#">Aliénor Rouaix<br>Hi</a>
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-12">
						<form>
							<div class="form-group">
								<input type="newdestinataire" class="form-control" placeholder="Destinataire">
							</div>
						</form>
					</div>
					</div>
					<div class="col-sm-12 well" >
						<div class="scrolling">
							<div class="row">
								
							</div>

							
						</div>
					</div>
					<div class="row well ">
						<div class="col-sm-9">
							<div class="row"><br></div>
							<form>
								<div class="form-group">
									<input type="firstname" class="form-control" id="prenom" placeholder="Ecrire...">
								</div>
							</form>
						</div>
						<div class="col-sm-3">
							<div class="well text-center">
								<button type="button" class="btn btn-outline-info btn-sm">Envoyer</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>