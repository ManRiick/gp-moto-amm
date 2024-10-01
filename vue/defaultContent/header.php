<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moto GP 24 <?php isset($page) ? " - $page" : "" ?></title>
    <link rel="icon" href="../img/icon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script><!-- Tailwind CSS FRAMEWORK CSS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> <!-- Framework javascript pour le parallax -->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class="navbar">
            <img id="logo" src="../img/moto-gp-logo.webp">
            <nav>
                <a href="?page=accueil">Accueil</a>
                <a href="?page=pilotes">Pilotes</a>
                <a href="?page=courses">Courses</a>
                <a href="?page=equipes">Equipes</a>
                <a href="?page=circuits">Circuits</a>
            </nav>
        </div>
    </header>
    <div data-depth="0.2" class="fullscreen background">
        <div class="fullscreen blurify"></div>
    </div>