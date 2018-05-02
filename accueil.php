<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="accueil.css">
	<link rel="stylesheet" href="general.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-default" id="tabcol">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="alienor.png" class="img-circle" height="30" alt="Avatar"></a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="accueil.php">Accueil</a></li>
				<li><a href="reseau.php">Mon réseau</a></li>
				<li><a href="mur.php">Vous</a></li>
				<li><a href="notifications.php">Notifications</a></li>
				<li><a href="messagerie.php">Messagerie</a></li>
				<li><a href="emplois.php">Emplois</a></li>
				<li><a href="albums.php">Photos</a></li>
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

			<div class="col-sm-3 well">
				<div class="well">
					<p><a href="mur.php">My Profile</a></p>
					<img src="alienor.png" class="img-circle" height="65" width="65" alt="Avatar">
				</div>
				<div class="well">
					<p>Vous avez<br>220<br>relations</p>
				</div>

			</div>

			<div class="col-sm-7">

				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default text-left">
							<div class="panel-body">
								<textarea  placeholder="Exprimez-vous... " rows="3" cols="85" class="area"></textarea> 


								<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
									<div class="btn-group mr-2" role="group" aria-label="First group">
										<button type="button" class="btn btn-primary">Photo</button>
										<button type="button" class="btn btn-primary">Vidéo</button>
										<button type="button" class="btn btn-primary">Humeur</button>
										<button type="button" class="btn btn-primary">Activité</button>
									</div>
									<div class="btn-group mr-2" role="group" aria-label="Second group">
										<button type="button" class="btn btn-primary">Je suis à</button>
										<button type="button" class="btn btn-primary">Date</button>
									</div>  
									<div class="btn-group mr-2" role="group" aria-label="Third group">
										<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Confidentialité</button>
										<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											<button type="button" class="btn btn-secondary">Private</button>
											<button type="button" class="btn btn-secondary">Public</button>
										</div>
									</div>
									<div class="btn-group" role="group" aria-label="Fourth group">
										<button type="button" class="btn btn-primary">Publier</button>
									</div>
								</div>

							</div>  
						</div>
					</div>
				</div>
				<div class="px-2">
					<div class="row well">
						<div class="col-sm-12">
							<div class="col-sm-3">
								<p>John</p>
								<img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
							</div>
							<div class="col-sm-8">
								<p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
							</div>  
							<div class="col-sm-1">
								<button type="button" class="btn btn-primary btn-xs">...</button>
							</div> 
							<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group mr-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-primary btn-sm">J'aime</button>
									<button type="button" class="btn btn-primary btn-sm">Commenter</button>
									<button type="button" class="btn btn-primary btn-sm">Partager</button>
								</div>
							</div>    
						</div>
					</div>

					<div class="row well">
						<div class="col-sm-12">
							<div class="col-sm-3">
								<p>John</p>
								<img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
							</div>
							<div class="col-sm-8">
								<p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
							</div>
							<div class="col-sm-1">
								<button type="button" class="btn btn-primary btn-xs">...</button>
							</div> 
							<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group mr-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-primary btn-sm">J'aime</button>
									<button type="button" class="btn btn-primary btn-sm">Commenter</button>
									<button type="button" class="btn btn-primary btn-sm">Partager</button>
								</div>
							</div>
						</div>
					</div>

					<div class="row well">
						<div class="col-sm-12">
							<div class="col-sm-3">
								<p>John</p>
								<img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
							</div>
							<div class="col-sm-8">
								<p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
							</div>
							<div class="col-sm-1">
								<button type="button" class="btn btn-primary btn-xs">...</button>
							</div> 
							<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group mr-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-primary btn-sm">J'aime</button>
									<button type="button" class="btn btn-primary btn-sm">Commenter</button>
									<button type="button" class="btn btn-primary btn-sm">Partager</button>
								</div>
							</div>
						</div>
					</div>

					<div class="row well">
						<div class="col-sm-12">
							<div class="col-sm-3">
								<p>John</p>
								<img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
							</div>
							<div class="col-sm-8">
								<p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
							</div>
							<div class="col-sm-1">
								<button type="button" class="btn btn-primary btn-xs">...</button>
							</div> 
							<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group mr-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-primary btn-sm">J'aime</button>
									<button type="button" class="btn btn-primary btn-sm">Commenter</button>
									<button type="button" class="btn btn-primary btn-sm">Partager</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
</body>
</html>