<?php


if ($module) {
    // Classement général regroupant toutes les matieres de ce module
    $classementsGeneraux = $module->getClassementEtudiants();
?>
<div>
    <h3>Classement général des étudiants</h3>
    <table>
        <tr>
            <th>Étudiant</th>
            <th>Classement</th>
        </tr>
        <?php foreach ($classementsGeneraux as $classement): ?>
        <tr>
            <td><?= $classement['nom_etudiant']; ?></td>
            <td><?= $classement['rang']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
    // Classement pour chaque matiere appartenant à ce module
    $matieres = $module->getMatieres();
    foreach ($matieres as $matiere) {
        $classementsMatiere = $matiere->getClassementEtudiants();
?>
<div>
    <h3>Classement des étudiants pour la matiere <?= $matiere->nommat; ?></h3>
    <table>
        <tr>
            <th>Étudiant</th>
            <th>Classement</th>
        </tr>
        <?php foreach ($classementsMatiere as $classement): ?>
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
?>