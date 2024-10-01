<?php 
require_once('model/pilotesModel.php');
if ($connected) {
    $pilotes = listePilotes($pdo, $table);
}
?>

<style>
    .table-container {
        background-color: rgba(33, 37, 41, 0.8); 
        padding: 20px;
        border-radius: 8px;
        margin: 20px auto;
        width: 80%; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #444;
        color: #fff; 
    }

    td {
        color: #fff; 
    }

    tr:hover {
        background-color: rgba(255, 255, 255, 0.1); 
        cursor: pointer;
    }

    tr a {
        display: block;
        color: inherit;
        text-decoration: none;
    }
</style>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <?php if (!empty($pilotes)) : ?>
            <tbody>
                <?php foreach ($pilotes as $pilote) : ?>
                    <tr>
                        <td><a href="?page=infoPilot.php?id=<?= htmlspecialchars($pilote['id']) ?>"><?= htmlspecialchars($pilote['nom']) ?></a></td>
                        <td><a href="?page=infoPilot.php?id=<?= htmlspecialchars($pilote['id']) ?>"><?= htmlspecialchars($pilote['prenom']) ?></a></td>
                        <td><a href="?page=infoPilot.php?id=<?= htmlspecialchars($pilote['id']) ?>"><?= htmlspecialchars($pilote['dateNaiss']) ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php else : ?>
            <tbody>
                <tr>
                    <td colspan="3">OOOPS il y a un problème làààà </td>
                </tr>
            </tbody>
        <?php endif; ?>
    </table>
</div>
