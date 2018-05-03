<?php

$database = "linkece"; //identifier le nom de base de données

$db_handle = mysqli_connect("localhost", "root", "root"); //On ouvre la base de données

$db_found = mysqli_select_db($db_handle, $database);


?>