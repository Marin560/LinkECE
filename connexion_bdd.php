<?php

$database = "test"; //identifier le nom de base de données

$db_handle = mysqli_connect("localhost", "root@localhost", ""); //On ouvre la base de données

$db_found = mysqli_select_db($db_handle, $database);

//pour l'affichage des accents
$sql = "SET NAMES 'utf8'";
mysqli_query($db_handle, $sql) ;

?>