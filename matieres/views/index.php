<?php


if ($matiere) {
    // Classement général regroupant toutes les épreuves de cette matiere
    $classementsGeneraux = $matiere->getClassementEtudiants();
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
    // Classement pour chaque épreuve appartenant à cette matiere
    $epreuves = $matiere->getEpreuves();
    foreach ($epreuves as $epreuve) {
        $classementsEpreuve = $epreuve->getClassementEtudiants();
?>
<div>
    <h3>Classement des étudiants pour l'épreuve <?= $epreuve->libepr; ?></h3>
    <table>
        <tr>
            <th>Étudiant</th>
            <th>Classement</th>
        </tr>
        <?php foreach ($classementsEpreuve as $classement): ?>
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