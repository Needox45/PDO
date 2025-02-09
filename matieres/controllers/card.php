<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$matiere = new Matieres($db);
$matiere->fetch($id);

$classements = $db->prepare("SELECT etudiants.nometu AS nom_etudiant, classement_matieres.rang
                             FROM classement_matieres
                             JOIN etudiants ON classement_matieres.numetu = etudiants.numetu
                             WHERE classement_matieres.nummat = :nummat
                             ORDER BY classement_matieres.rang");
$classements->bindParam(':nummat', $id, PDO::PARAM_INT);
$classements->execute();
$classements = $classements->fetchAll(PDO::FETCH_ASSOC);

include dirname(__FILE__) . '/../views/card.php';