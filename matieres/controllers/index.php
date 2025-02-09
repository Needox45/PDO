<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';

$matieres = Matieres::fetchAll($db);

foreach ($matieres as $matiere) {
    $classementsGeneraux = $db->prepare("SELECT etudiants.nometu AS nom_etudiant, classement_matieres.rang
                                         FROM classement_matieres
                                         JOIN etudiants ON classement_matieres.numetu = etudiants.numetu
                                         WHERE classement_matieres.nummat = :nummat
                                         ORDER BY classement_matieres.rang");
    $classementsGeneraux->bindParam(':nummat', $matiere->nummat, PDO::PARAM_INT);
    $classementsGeneraux->execute();
    $matiere->classementsGeneraux = $classementsGeneraux->fetchAll(PDO::FETCH_ASSOC);

    $epreuves = $matiere->getEpreuves();
    foreach ($epreuves as $epreuve) {
        $classementsEpreuve = $db->prepare("SELECT etudiants.nometu AS nom_etudiant, classement_epreuves.rang
                                            FROM classement_epreuves
                                            JOIN etudiants ON classement_epreuves.numetu = etudiants.numetu
                                            WHERE classement_epreuves.numepr = :numepr
                                            ORDER BY classement_epreuves.rang");
        $classementsEpreuve->bindParam(':numepr', $epreuve->numepr, PDO::PARAM_INT);
        $classementsEpreuve->execute();
        $epreuve->classements = $classementsEpreuve->fetchAll(PDO::FETCH_ASSOC);
    }
    $matiere->epreuves = $epreuves;
}

include dirname(__FILE__) . '/../views/index.php';