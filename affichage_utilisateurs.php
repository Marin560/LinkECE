<?php //Affichage des amis  
    
    
    while ($resultat = mysqli_fetch_assoc($recu)) {
        
        $name[$i] = $resultat['prenom']." ".$resultat['nom'];
        $mail[$i]=$resultat['mail'];
        $profilpicture[$i]=$resultat['pp'];
        $id_ami[$i] = $resultat['id'];
		  		
        //Je fais une requête pour regarder si l'utilisateur est ami avec le résultat
        $sql2 = "SELECT * FROM `amitie` WHERE `id1`='".$id."' AND `id2`= '".$id_ami[$i]."' ";
        $recu2 = mysqli_query($db_handle,$sql2);
        
        if(mysqli_fetch_assoc($recu2) == 0){
            //Il n'est pas ami avec le type, on affiche le bouton ajouter
            $bouton_action_amitie = "Ajouter";
        }
        else{
            //Il est déjà ami avec lui, on affiche le bouton supprimer
            $bouton_action_amitie = "Supprimer";
        }
			echo'
			
				<div class="col-sm-3">
					<div class="well">
						<p><a href="#">'.$name[$i].'</a></p>
						<img src="'.$repertoire.$profilpicture[$i].'" class="img-circle" height="65" width="65" alt="Avatar">
						<div class="row">
							<a href="mailto:jean-pierre.segado@ece.fr">'.$mail[$i].'</a></p>
						</div>
						<div class="row">
							<a href="traitement_ami.php?ami_action='.$id_ami[$i].'&amp;bouton_action='.$bouton_action_amitie.'"><button type="button" class="btn btn-outline-secondary btn-xs">'.$bouton_action_amitie.'</button></a>
							<button type="button" class="btn btn-outline-secondary btn-xs">Messagerie</button>
						</div>
					</div>
				</div>
			
			' ;
			$i++;

			};
?>