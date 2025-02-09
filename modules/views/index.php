<?php

if ($modules) {
    foreach ($modules as $module) {
        ?>
        <div>
            <h3>Classement général des étudiants pour le module <?= $module->nommod; ?></h3>
            <table>
                <tr>
                    <th>Étudiant</th>
                    <th>Classement</th>
                </tr>
                <?php foreach ($module->classementsGeneraux as $classement): ?>
                <tr>
                    <td><?= $classement['nom_etudiant']; ?></td>
                    <td><?= $classement['rang']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <?php
        foreach ($module->matieres as $matiere) {
            ?>
            <div>
                <h3>Classement des étudiants pour la matière <?= $matiere->nommat; ?></h3>
                <table>
                    <tr>
                        <th>Étudiant</th>
                        <th>Classement</th>
                    </tr>
                    <?php foreach ($matiere->classements as $classement): ?>
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