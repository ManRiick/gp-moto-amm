<?php
$page = "";
if(isset($_GET['page'])){
    $page = $_GET['page'];
}

include("vue/defaultContent/header.php");

switch($page){

    default:
        include("vue/accueil.php");
        break;
}

include("vue/defaultContent/footer.php");