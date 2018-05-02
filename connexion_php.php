<?php
    
    //Ouverture de la base de données
 	$database = "test"; //Nom de la base de donnée à choisir 
$db_handle = mysqli_connect("localhost", "root@localhost", ""); //On ouvre la base de données avec Mysqli
 	
    $db_found = mysqli_select_db($db_handle, $database);
 	
    //On vérifie que la connexion à la base de donnée s'est bien faite
    if ($db_found) {
        echo "Base de donnée connectée <br>";  
        
        $_POST['email'];
        
        /*
        //On ajoute un élément dans la table
        $sql = "INSERT INTO `users`(`id`, `mail`, `mdp`, `nom`, `prenom`, `admin`) VALUES('','jeanpierre@hotmail.com','Michel','Jean','Gassin', '1')";
        */
        
        //On récupère des choses grâce à un formulaire 
        
        //Executer la ligne sql précédante
        mysqli_query($db_handle, $sql);
        
        echo "Ligne ajoutée à la base de données <br>"; 
    }
   
	// Si la Base de donnée n'est pas trouvée / ou n'existe pas
 	else 
 		echo "Database not found";
	
    //On ferme ensuite la base de donnée
    mysqli_close($db_handle);

?>
