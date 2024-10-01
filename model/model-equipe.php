<?php
$dsn = 'mysql:host=localhost;dbname=gpmoto';
$username = 'projetgit';
$password = 'projetgit';

$connected = true;

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    $connected = false;
}

function getEquipes($pdo)
{
    $stmt = $pdo->prepare('SELECT id, libelle, pays, modeleMoto FROM team');
    $stmt->execute();
    if($stmt->rowCount() == 0) {
        return false;
    }
    return $stmt->fetchAll();
}

function getEquipePilote($pdo, $id){
    $stmt = $pdo->prepare('SELECT nom, prenom, nationalite, dateNaiss FROM team INNER JOIN pilote ON pilote.idTeam = team.id WHERE team.id = :id LIMIT 2');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if($stmt->rowCount() == 0) {
        return false;
    }
    return $stmt->fetchAll();
}