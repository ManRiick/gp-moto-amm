<?php
require_once('model/model-equipe.php');

$equipes;

if($connected) {
    $equipes = getEquipes($pdo);
}