<?php

session_start();


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
