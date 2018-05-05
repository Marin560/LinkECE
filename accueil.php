<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$test=$_SESSION['test'];
$id=$_SESSION['id'];

include 'connexion_bdd.php';

if($db_found){
	//On compte le nombre d'amis de l'utilisateur
	$sql = "SELECT COUNT(id1) AS nb FROM amitie WHERE `id1` = '".$id."'";
	$recu = mysqli_query($db_handle, $sql) ;
	$resultat = mysqli_fetch_assoc($recu);
	$_SESSION['nbamis']=$resultat['nb']; //C'est le nombre d'amis de l'utilisateur

	$sql1 = "SELECT DISTINCT prenom, nom, pp, description,id_publi, nb_likes FROM user INNER JOIN amitie ON user.id=amitie.id2 INNER JOIN publications ON publications.id_user=amitie.id2 OR publications.id_user=amitie.id2 WHERE amitie.id1= '".$id."' ";

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
	<link rel="stylesheet" href="accueil.css">
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
                <li><a href="afficher_tous_utilisateurs.php"><span class="glyphicon glyphicon-search "></span>Rechercher un User</a></li>
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

					<?php echo '<p><a href="mur.php">Bonjour '.$prenom.' ! </a></p>' ?>
					<img src="<?php echo $repertoire.$pp; ?>" class="img-circle" height="65" width="65" alt="Avatar">
				</div>
				<div class="well">
					<?php echo '<p>Vous avez<br>'.$_SESSION['nbamis'].'<br>relations</p> ' ?>
				</div>

			</div>

			<div class="col-sm-7">

				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default text-left">
							<div class="panel-body">
	                       
                            <!-- code pour créer un nouveau post -->
                            <?php  include("nouveau_post.php"); ?>

							</div>  
						</div>
					</div>
				</div>
		      
                <?php include("afficher_post.php"); ?>

			</div>
		</div>
	</body>
	</html>