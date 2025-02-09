<?php

foreach ($etudiant->classementsAnnee as $annee => $classementsAnnee) {
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