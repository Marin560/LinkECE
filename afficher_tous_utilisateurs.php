<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$test=$_SESSION['test'];
$id=$_SESSION['id'];

include 'connexion_bdd.php';

if($db_found){

    if(isset($_POST['search'])){
        
       //Prénom recherché par l'utilisateur
       $prenom_recherche = $_POST['search'];
        
	   $sql = "SELECT * FROM user WHERE prenom = '".$_POST['search']."' ";
	   $recu = mysqli_query($db_handle, $sql) ;
       $i = 0;  
    } 
    
    if(isset($_GET['confirmation'])){
        //Je récupère mon nom d'alerte
        echo '<script type="text/javascript">window.alert("'.$_GET['confirmation'].'");</script>';
    }
    
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
			<p></p><br>
		</div>
		<div class="row">
			<form method="post" action="">
				<div class="form-group">
					<input type="search" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rechercher...">
				</div>
			</form>
            

            <?php if(isset($_POST['search'])){
                
                include ("affichage_utilisateurs.php"); 
        } ?>
            
        </div>
    </div>
        
	</body>
</html>