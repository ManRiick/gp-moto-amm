<?php
$page = "";
if(isset($_GET['page'])){
    $page = $_GET['page'];
}

include("vue/defaultContent/header.php");

switch($page){

    case 'pilotes':
        include("vue/pilotes.php");
        break;
    
    case 'courses':
        include("vue/courses.php");
        break;
    
    case 'equipes':
        include("vue/equipes.php");
        break;

    case 'circuits':
        include("vue/circuits.php");
        break;

    default:
        include("vue/accueil.php");
        break;

}

include("vue/defaultContent/footer.php");