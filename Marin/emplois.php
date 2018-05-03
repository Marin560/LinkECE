<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire']; //Repertoire où trouver ses photos
$id=$_SESSION['id']; //Id de l'utilisateur en cours

include 'connexion_bdd.php'; //Connexion à la base de données

if($db_found){
	
    //Selection des propositions de postes
	$sql = "SELECT * FROM emplois ";
	$recu = mysqli_query($db_handle, $sql) ;
    $i=0;
    
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
                <li class="active"><a href="emplois.php">Emplois</a></li>
                <li ><a href="albums.php">Photos</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="traitement_postulat.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
            </ul>
        </div>
    </nav>
        <div class="container text-center">
            
        <!-- Affichage des propres candidatures du user actif -->
        <?php
            
            //Vérification s'il faut afficher les candidatures ou non 
            if(isset($_GET['afficher_candidatures'])){ //Si on a cliqué sur le bouton, on reçoit une variable afficher_candidature
                
                if($_GET['afficher_candidatures'] == "1"){ //si la variable est à 1, on affiche toutes les infos 
                    
                    //Selection des candidatures du user actif
                    $sql2 = "SELECT id_offre,metiers,description,titre,entreprise FROM emplois INNER JOIN candidature ON candidature.id_offre_postulee= emplois.id_offre WHERE candidature.id_candidat= '".$id."' ";
                    
                    $candidatures_recu = mysqli_query($db_handle, $sql2) ; 
                    $j=0;
                        
                    //On affiche toutes les candidatures
                    while ($resultat2= mysqli_fetch_assoc($candidatures_recu)) {
                        
                        $id_offre[$j] = $resultat2['id_offre'];
                        $metiers[$j]=$resultat2['metiers'];
                        $description[$j]=$resultat2['description'];
                        $titre[$j]=$resultat2['titre'];
                        $entreprise[$j]=$resultat2['entreprise'];

                        
                        echo '
                        <div class="row">
                        <div class="col-sm-4">
                                <div class="well">
                                    <div class="row">
                                        <div class="p-3 mb-2 bg-info text-white" ><h2>'.$titre[$j].'</h2></div><br>
                                    </div>

                                    <div class="row">
                                        <h4 class="font-weight-bold">Description de la mission :</h4>						
                                    </div>	

                                    <div class="row ">
                                        <div class="col-sm-12"><p class="text-justify">'.$description[$j].'</p></div>
                                    </div>

                                    <div class="row">
                                        <a href ="traitement_suppression_postulat.php?id_offre='.$id_offre[$j].'"><button type="button" class="btn btn-danger">Annuler le postulat</button></a>
                                    </div>
                                </div>
                        </div>
                        
                        '; 
                        $j++;

                    };
                    
                    
                    //On change la variable 
                    $afficher_candidature = "0";
                    
                } 
                else if($_GET['afficher_candidatures']== "0"){ //On affiche pas les candidatures
                    //On affiche rien et on change la variable
                    $afficher_candidature = "1";
                }

            }else{ //Si on clique sur afficher 

                $afficher_candidature = "1";
            }
            
            echo '
            <div class="row">
                <div class="text-left">
                    <a href ="emplois.php?afficher_candidatures= '.$afficher_candidature.' "><button type="button" class="btn btn-info">Mes candidatures</button><p><br></p></a>
                </div>
            </div>
            
            ';
            

            
        ?>
            
        <!--Nouvelles propositions de postes -->
        <div class="row">
            <?php
            
                while ($resultat = mysqli_fetch_assoc($recu)) {

				$id_offre[$i] = $resultat['id_offre'];
				$metiers[$i]=$resultat['metiers'];
                $description[$i]=$resultat['description'];
				$titre[$i]=$resultat['titre'];
                $entreprise[$i]=$resultat['entreprise'];
            
                echo '
                <div class="row">
                <div class="col-sm-4">
                        <div class="well">
                            <div class="row">
                                <div class="p-3 mb-2 bg-info text-white" ><h2>'.$titre[$i].'</h2></div><br>
                            </div>
                            
                            <div class="row">
                                <h4 class="font-weight-bold">Description de la mission :</h4>						
                            </div>	

                            <div class="row ">
                                <div class="col-sm-12"><p class="text-justify">'.$description[$i].'</p></div>
                            </div>

                            <div class="row">
                                <a href ="traitement_postulat.php?id_offre='.$id_offre[$i].'"><button type="button" class="btn btn-info">Postuler</button></a>
                            </div>
                        </div>
                </div>
                
               
                
                '; 
                
                $i++;
                    
            };
            
             if(isset($_GET['confirmation'])){
                    //Je récupère mon nom d'alerte
                    echo '<script type="text/javascript">window.alert("'.$_GET['confirmation'].'");</script>';
                }
            
            
            ?>
                
            
            
            <!-- On affiche un espace pour aller à la ligne -->
            <br>

    </div>

    </div>

</body>
</html>