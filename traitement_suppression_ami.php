<?php

session_start();

$id_user=$_SESSION['id'];

//On ouvre la bdd
include 'connexion_bdd.php';

if(isset($_GET['ami_supprime'])){
    
    if(db_found){
        $ami_supprime = $_GET['ami_supprime'];
    
        //On fait le traitement sql
        $sql = "DELETE FROM `amitie` WHERE `id1`= '".$id_user."' AND `id2`= '".$ami_supprime."' " ;
        mysqli_query($db_handle, $sql) ;

        //On relance la fenêtre actualisée;
        header("Location: reseau.php");
    }
    else{
        echo "ERROR - Problème SQL";
    }
    
}
else{
    echo "ERROR - Aucune data n'a été reçue - Vérifier traitement_suppression_ami.php";
}

?>