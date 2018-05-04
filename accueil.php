<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$test=$_SESSION['test'];
$id=$_SESSION['id'];

include 'connexion_bdd.php';

if($db_found){
	
	$sql = "SELECT COUNT(id1) AS nb FROM amitie WHERE `id1` = '".$id."'";
	$recu = mysqli_query($db_handle, $sql) ;
	$resultat = mysqli_fetch_assoc($recu);
	$_SESSION['nbamis']=$resultat['nb'];

	$sql1 = "SELECT DISTINCT prenom, nom, pp, description,id_publi, nb_likes FROM user INNER JOIN amitie ON user.id=amitie.id2 INNER JOIN publications ON publications.id_user=amitie.id2 OR publications.id_user=amitie.id1 WHERE amitie.id1='".$id."'";

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
	<link rel="stylesheet" href="general.css">
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
	
                            <form method = "post" action ="traitement_nouveau_post.php">
                                <textarea  placeholder="Exprimez-vous... " name="texte_user" rows="3" cols="85" class="area"></textarea> 
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
									<div class="btn-group" role="group" aria-label="Fourth group">
                                        <input type="submit" name="Publier" class="btn btn-primary" value="Publier">
                                        <input type="submit" name="Changer" class="btn btn-primary" value="Changer">
									</div>
								</div>
                            </form>

							</div>  
						</div>
					</div>
				</div>
				<?php

				while ($publiamis = mysqli_fetch_assoc($recu1)) {

					$name[$i] = $publiamis['prenom']." ".$publiamis['nom'];
					$description[$i]=$publiamis['description'];
					$photo[$i]=$publiamis['pp'];
                    $id_publi[$i]=$publiamis['id_publi'];
                    $nb_likes[$i]=$publiamis['nb_likes'];
                    
                    //Je vérifie si il existe un j'aime du user pour cette publication
                    $sql2 = "SELECT * FROM publi_aimee WHERE id_publi = '". $id_publi[$i]."' AND id_user = '".$id."' ";
                    $recu2 = mysqli_query($db_handle, $sql2) ;
                    
                    $resultat = mysqli_fetch_assoc($recu2);  
                    
                    if($resultat['id_publi'] == 0){
                        $boutton_jaime = "J'aime";
                    }
                    else{
                        
                        $boutton_jaime = "Je n'aime plus";
                    }
                    
					echo '
                    
					<div class="col-sm-12">
						<div class="row well">
							<div class="col-sm-3">
								<p>'.$name[$i].'</p>
								<img src="'.$repertoire.$photo[$i].'" class="img-circle" height="55" width="55" alt="Avatar">
                                <p><br>'.$nb_likes[$i].' Likes</p>
							</div>
							<div class="col-sm-8">
								<p>'.$description[$i].'
							</div>  
							<div class="col-sm-1">
								<button type="button" class="btn btn-primary btn-xs">...</button>
							</div> 
							     </p><br><br><br><br>
                               <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group mr-2" role="group" aria-label="First group">
									<a href="jaime.php?id_publi= '.$id_publi[$i].' &amp; action= '.$boutton_jaime.' "><button type="button" class="btn btn-primary btn-sm">'.$boutton_jaime.'</button></a>
									<button type="button" class="btn btn-primary btn-sm">Commenter</button>
									<button type="button" class="btn btn-primary btn-sm">Partager</button>
								</div> 
							</div> 
                            
						</div>
					</div>
					';
				$i++;
				};
				?>

			</div>
		</div>
	</body>
	</html>