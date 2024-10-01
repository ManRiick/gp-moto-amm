<?php

$host = "localhost";
$db_name = "gpmoto";
$username = "projetgit";
$password = "projetgit";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);

} 
catch {
    echo "La connexion à la base de données a échoué.";
}





?>