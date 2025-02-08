<?php


// Classement général de tous les étudiants par année, regroupant tous les modules de cette année
$annees = [1, 2];
foreach ($annees as $annee) {
    $classementsAnnee = $etudiant->getClassementParAnnee($annee);
?>
<div>
    <h3>Classement des étudiants pour l'année <?= $annee; ?></h3>
    <table>
        <tr>
            <th>Étudiant</th>
            <th>Classement</th>
        </tr>
        <?php foreach ($classementsAnnee as $classement): ?>
        <tr>
            <td><?= $classement['nom_etudiant']; ?></td>
            <td><?= $classement['rang']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php
}
?>