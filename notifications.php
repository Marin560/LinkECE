<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id = $_SESSION['id'];

include("connexion_bdd.php");

if(db_found){
    
    //Je fais ma requête sql pour récupérer toutes les demandes en ami
    $sql = "SELECT id, nom, pp, prenom FROM user INNER JOIN notifications ON notifications.id_asker=user.id AND notifications.id_receiver= '".$id."' " ;
    $recu = mysqli_query($db_handle, $sql) ;
    $i= 0;
    
    if(isset($_GET['id_asker'])){
        //La demande a été acceptée, on ajoute les deux amitiés
        $sql = "INSERT INTO `amitie`(`id1`, `id2`) VALUES ('".$id."','".$_GET['id_asker']."') ";
        mysqli_query($db_handle, $sql) ;   
        
        $sql = "INSERT INTO `amitie`(`id1`, `id2`) VALUES ('".$_GET['id_asker']."','".$id."') "; 
        mysqli_query($db_handle, $sql) ;   
        
        //Puis on supprime la demande d'amitié
        $sql = "DELETE FROM `notifications` WHERE id_asker = '".$_GET['id_asker']."' ";
        mysqli_query($db_handle, $sql) ;   
        
        header("Location: notifications.php" );
    }

}
else
    die("Erreur sql");

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
    
    

			
    
    
    <?php 
    while ($resultat = mysqli_fetch_assoc($recu)) {
        
        $name[$i] =  $resultat['prenom']." ".$resultat['nom']." ";
        $photo_asker[$i] = $resultat['pp'];
        $id_asker[$i]= $resultat['id'];
        
    echo '
    
	<div class="container text-center">
		<div class="row"><br><br></div>
		<div class="row">
			<div class="col-sm-2"><br></div> 
			<div class ="col-sm-8"> 
				<div class="col-sm-3"><img src="'.$repertoire.$photo_asker[$i].'" class="img-circle" height="55" width="55" alt="Avatar"></div>
				<div class="col-sm-9"> 
					<div class="well"><p>'.$name[$i].'souhaite vous ajouter à sa liste de contacts</p> 
                    <a href="?id_asker= '.$id_asker[$i].'"><button type="button" class="btn btn-success btn-sm">Accepter L\'invitation</button></a>
					</div>
				</div>
			</div>
			<div class="col-sm-2"><br></div> 
		</div>
    </div>
    ';
    
    $i++;
        
    };
    
    ?>
    </body>
</html>