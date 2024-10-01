<?php
require_once('controller/afficher-equipe.php');
?>
<link rel="stylesheet" href="./css/equipes.css">
<div class="title content">
    <p class="title text-xl">Équipes :</p>
    <table class="table">
        <thead>
            <tr>
                <th>Équipe</th>
                <th>Pays</th>
                <th>Modele Moto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
                foreach($equipes as $equipe) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($equipe['libelle']) . "</td>";
                    echo "<td>" . htmlspecialchars($equipe['pays']) . "</td>";
                    echo "<td>" . htmlspecialchars($equipe['modeleMoto']) . "</td>";
                    $pilotes = getEquipePilote($pdo, $i);
                    foreach($pilotes as $pilote){
                        echo "<td>" . htmlspecialchars($pilote['nom']) . "</td>";
                        echo "<td>" . htmlspecialchars($pilote['prenom']) . "</td>";
                        echo "<td>" . htmlspecialchars($pilote['nationalite']) . "</td>";
                    }
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

