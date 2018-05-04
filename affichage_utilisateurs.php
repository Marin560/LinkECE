<?php //Affichage des amis  
    
    while ($resultat = mysqli_fetch_assoc($recu)) {

				$name[$i] = $resultat['prenom']." ".$resultat['nom'];
				$mail[$i]=$resultat['mail'];
				$profilpicture[$i]=$resultat['pp'];
                $id_ami[$i] = $resultat['id'];
				
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