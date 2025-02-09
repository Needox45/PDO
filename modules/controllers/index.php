<?php

require dirname(__FILE__) . '/../../class/module.class.php';

$modules = Modules::fetchAll($db);

foreach ($modules as $module) {
    // Classement général regroupant toutes les matières de ce module
    $classementsGeneraux = $db->prepare("SELECT etudiants.nometu AS nom_etudiant, classement_modules.rang
                                         FROM classement_modules
                                         JOIN etudiants ON classement_modules.numetu = etudiants.numetu
                                         WHERE classement_modules.nummod = :nummod
                                         ORDER BY classement_modules.rang");
    $classementsGeneraux->bindParam(':nummod', $module->nummod, PDO::PARAM_INT);
    $classementsGeneraux->execute();
    $module->classementsGeneraux = $classementsGeneraux->fetchAll(PDO::FETCH_ASSOC);

    // Classement pour chaque matière appartenant à ce module
    $matieres = $module->getMatieres();
    foreach ($matieres as $matiere) {
        $classementsMatiere = $db->prepare("SELECT etudiants.nometu AS nom_etudiant, classement_matieres.rang
                                            FROM classement_matieres
                                            JOIN etudiants ON classement_matieres.numetu = etudiants.numetu
                                            WHERE classement_matieres.nummat = :nummat
                                            ORDER BY classement_matieres.rang");
        $classementsMatiere->bindParam(':nummat', $matiere->nummat, PDO::PARAM_INT);
        $classementsMatiere->execute();
        $matiere->classements = $classementsMatiere->fetchAll(PDO::FETCH_ASSOC);
    }
    $module->matieres = $matieres;
}

include dirname(__FILE__) . '/../views/index.php';