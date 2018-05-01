<? php
	$login = isset ($_POST["identifiant"])? $_POST["identifiant"]: "";
	$pass = isset ($_POST["passw"])? $_POST["passw"]: "";
	$connexion = false;

	$login = array(
		"toto" => "totomdp",
		"titi" => "titimdp",
		"tutu" => "123tutu123",

	);
	//vérifier si (login, password) est dans le serveur 
	for ($i=0; $i < count($logs); $i++){
		if ($logs[$login] == $pass) {
			$connexion = true;
			break;
		}
	} 

	if ($connexion){
		echo "Connexion okay";
	}
	else {
		echo "Connexion refusée";
	}

?>