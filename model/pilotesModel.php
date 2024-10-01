<?php 
$table = "pilote";
$dsn = 'mysql:host=localhost;dbname=gpmoto';
$username = "projetgit";
$password = "projetgit";
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connected = true;  
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function listePilotes($pdo, $table)
{
    $stmt = $pdo->prepare('SELECT id, nom, prenom, dateNaiss FROM ' . $table);
    $stmt->execute();
    if ($stmt->rowCount() == 0) {
        return false;
    }
    return $stmt->fetchAll();
}

function piloteDetail($pdo, $table, $id)
{
    $stmt = $pdo->prepare('SELECT nom, prenom, nationalite, dateNaiss FROM ' . $table . ' WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($stmt->rowCount() == 0) {
        return false;
    }
    return $stmt->fetch(PDO::FETCH_OBJ);
}
?>
