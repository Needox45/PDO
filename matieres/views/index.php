<?php

if ($matieres) {
    foreach ($matieres as $matiere) {
        ?>
        <div>
            <h3>Classement général des étudiants pour la matière <?= $matiere->nommat; ?></h3>
            <table>
                <tr>
                    <th>Étudiant</th>
                    <th>Classement</th>
                </tr>
                <?php foreach ($matiere->classementsGeneraux as $classement): ?>
                <tr>
                    <td><?= $classement['nom_etudiant']; ?></td>
                    <td><?= $classement['rang']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <?php
        foreach ($matiere->epreuves as $epreuve) {
            ?>
            <div>
                <h3>Classement des étudiants pour l'épreuve <?= $epreuve->libepr; ?></h3>
                <table>
                    <tr>
                        <th>Étudiant</th>
                        <th>Classement</th>
                    </tr>
                    <?php foreach ($epreuve->classements as $classement): ?>
                    <tr>
                        <td><?= $classement['nom_etudiant']; ?></td>
                        <td><?= $classement['rang']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php
        }
    }
}
?>