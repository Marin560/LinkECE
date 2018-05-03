<?php
include 'connexion_bdd.php'; //Connexion à la base de données

if($db_found){
	
	$sql = "SELECT * FROM emplois ";
	$recu = mysqli_query($db_handle, $sql) ;
    $i=0;
}
else{
	die('Arrêt du script; Bdd non trouvée');
}

                
                
while ($resultat = mysqli_fetch_assoc($recu)) {

				$id_offre[$i] = $resultat['id_offre'];
				$metiers[$i]=$resultat['metiers'];
                $description[$i]=$resultat['description'];
				$titre[$i]=$resultat['titre'];
                $entreprise[$i]=$resultat['entreprise'];
                
                echo $resultat['id_offre']; 
                
                $i++;
                    
                };
?>