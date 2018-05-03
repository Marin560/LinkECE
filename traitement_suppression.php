<?php  

//Connexion à la base de données
$database = "test"; //Nom de la base de donnée à choisir 
$db_handle = mysqli_connect("localhost", "root@localhost", ""); //On ouvre la base de données avec Mysqli

$db_found = mysqli_select_db($db_handle, $database);

if($db_found){
    echo "Connexion à la base de donnée réussie".'</br>';
    
    
    echo $_POST['email'].'<br/>';
    
    //On vérifie que le mail existe bien dans la base de données    
    $sql = "DELETE FROM `user` WHERE `user`.`mail` = '".$_POST['email']."' " ;
    
    mysqli_query($db_handle, $sql) ;
    
    //on a supprimé un user
    $selection = "Vous avez supprimé l'utilisateur";
    
    header('Location: modifier.php?number='.$selection);
    
}
else
    echo "Probleme de connexion sql";
?>

