<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id=$_SESSION['id'];



include 'connexion_bdd.php';

if($db_found){
	
	$sql = "SELECT DISTINCT id_photo, id_albumphotos FROM user INNER JOIN albums INNER JOIN photos WHERE `id_user` = '".$id."'";
	$sql2= "SELECT DISTINCT nom_album FROM albums WHERE `id_user` = '".$id."'";
	$recu = mysqli_query($db_handle, $sql);
	$recu2 = mysqli_query($db_handle, $sql2);

	$photos=array();
	$albums=array();
	$truc=array();
	$i=0;

	while($resultat = mysqli_fetch_assoc($recu)){

		$photos[$i]=$resultat["id_photo"];
		$albums[$i]=$resultat["id_albumphotos"];
		$truc[$i]= $albums[$i].$photos[$i];
		$i++;
	}

	$albums2=array();
	$j=0;

	while($resultat2 = mysqli_fetch_assoc($recu2)){

		$albums2[$j]=$resultat2["nom_album"];
		$j++;
	}

}
else{
	die('Arrêt du script; Bdd non trouvée');
}

$_SESSION['album1']= $albums2[0];
$_SESSION['album2']= $albums2[1];


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
	<nav class="navbar navbar-default" id="tabcol">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="<?php echo $repertoire.$pp; ?>" class="img-circle" height="30" alt="Avatar"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="accueil.php">Accueil</a></li>
				<li><a href="reseau.php">Mon réseau</a></li>
				<li><a href="mur.php">Vous</a></li>
				<li><a href="notifications.php">Notifications</a></li>
				<li><a href="messagerie.php">Messagerie</a></li>
				<li><a href="emplois.php">Emplois</a></li>
				<li class="active"><a href="albums.php">Photos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<br><br>
		</div>  
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-5">
					<div class="row well">
						<p>Photos</p>


						<div class="col-sm-4">

							<img src="<?php echo $repertoire.$truc[0]; ?>" class="img-thumbnail" class="img-fluid" alt="Photo">
						</div>
						<div class="col-sm-4">
							<img src="<?php echo $repertoire.$truc[1]; ?>" class="img-thumbnail" class="img-fluid" alt="Photo">
						</div>
						<div class="col-sm-4">
							<img src="<?php echo $repertoire.$truc[2]; ?>" class="img-thumbnail" class="img-fluid" alt="Photo">
						</div>
						<div class="col-sm-12"><br></div>
						<div class="col-sm-4">
							<img src="<?php echo $repertoire.$truc[3]; ?>" class="img-thumbnail" class="img-fluid" alt="Photo">
						</div>
						<div class="col-sm-4">
							<img src="<?php echo $repertoire.$truc[4]; ?>" class="img-thumbnail" class="img-fluid" alt="Photo">
						</div>
						<div class="col-sm-4">
							<img src="<?php echo $repertoire.$truc[5]; ?>" class="img-thumbnail" class="img-fluid" alt="Photo">
						</div>

					</div>
				</div>
				<div class="col-sm-2">

				</div>
				<div class="col-sm-5">
					<div class="row well ">
						<p>Albums</p>
						<div class="col-sm-12 ">
							<div class="col-sm-5">
								<div class="row well "><a href='caroussel.php'><p> <?php echo $albums2[0]; ?> </p></a></div>
							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-5">	
								<div class="row well " ><a href='caroussel.php'><p> <?php echo $albums2[1]; ?> </p></a></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

</html>