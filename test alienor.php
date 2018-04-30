<?php
	$numclient = isset ($_POST["numclient"])? $_POST["numclient"]:""; //if-then-else -- pour vérifier que la variable existe 
	$nomclient = isset ($_POST["nomclient"])? $_POST["nomclient"]:""; //if-then-else -- pour vérifier que la variable existe
	$age = isset ($_POST["age"])? $_POST["age"]:""; //if-then-else -- pour vérifier que la variable existe 
	$classesiege = isset ($_POST["classesiege"])? $_POST["classesiege"]:""; //if-then-else -- pour vérifier que la variable 
	$statutclient = isset ($_POST["statutclient"])? $_POST["statutclient"]:""; //if-then-else -- pour vérifier que la variable existe

	$erreur = "";

	if ($classesiege=="economie"){$economie=true;} 
	if ($classesiege=="affaire"){$affaire=true;} 
	if ($classesiege=="premiere"){$premiere=true;} 

	if ($statutclient=="regulier"){$regulier=true;} 
	if ($statutclient=="fidelite"){$fidelite=true;} 
	if ($statutclient=="vip"){$vip=true;} 
	
	if ($numclient == ""){
		 $error .= "Le champ numero client est vide />";
	}

	if ($nomclient == ""){
		 $error .= "Le champ nom client est vide />";
	}

	if ($age == ""){
		 $error .= "Le champ age est vide />";
	}

	if ($classesiege == ""){
		 $error .= "Le champ classe siege est vide />";
	}
	if ($statutclient == ""){
		 $error .= "Le champ statut client est vide />";
	}

	if ($erreur == ""){
		echo "Formulaire valide.";
	}
	else {
		echo "Erreur: $erreur";
	}







	$prixticket=550;

	if ($affaire){
		$prixticket= 2.2*$prixticket;

	if($age<=3){
		$prixticket=$prixticket-(0.05*$prixticket);
	} 
	if(($age>=4)&&($age<=5)){
		$prixticket=$prixticket-(0.02*$prixticket);
	}
	if($age>=60){
		$prixticket=$prixticket-(0.02*$prixticket);
	}

	}

	if ($premiere){
		$prixticket= 3*$prixticket;
		if($age<=3){
		$prixticket=$prixticket-(0.05*$prixticket);
	} 
	if(($age>=4)&&($age<=5)){
		$prixticket=$prixticket-(0.02*$prixticket);
	}
	if($age>=60){
		$prixticket=$prixticket-(0.02*$prixticket);
	}
	}

	if ($statutclient!=$regulier){
	if ($statutclient=="fidelite"){
		$prixticket=$prixticket-(0.025*$prixticket);
	}
	if ($statutclient=="vip"){
		$prixticket=$prixticket-(0.8*$prixticket);
	}
}


	echo "Numéro client: ".$numclient."<br>";
	echo "Nom client: ".$nomclient."<br>";
	echo "Age: ".$age."<br>";
	echo "Classe de siège: ".$classesiege."<br>";
	echo "Statut du client: ".$statutclient."<br><br><br>";
	echo "Vous payerez pour votre voyage Air France vol AF123 Paris-Dubaï ce samedi la somme de : ".$prixticket."€<br>";



?>


