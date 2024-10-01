<?php
function connect(){
    $bdd = 'mysql:host=127.0.0.1;dbname=gp_moto;charset=utf8';
    $username = 'projetgit';
    $password = 'projetgit';
    $pdo = new PDO($bdd, $username, $password);
    return $pdo;
}

function select($info="id,nom,pays,annee,longueur", $condition="True"){
    $sql = "SELECT $info FROM circuit WHERE $condition";
    $requette = connect()->prepare($sql);
    $requette->execute();
    $resultats = $requette->fetchAll(PDO::FETCH_ASSOC);
    return $resultats ;
}




?>