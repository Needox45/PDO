<?php

require dirname(__FILE__) . '/../../class/epreuves.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$epreuve = new Epreuves($db);
$epreuve->fetch($id);

$classements = $db->prepare("SELECT etudiants.nometu AS nom_etudiant, classement_epreuves.rang
                             FROM classement_epreuves
                             JOIN etudiants ON classement_epreuves.numetu = etudiants.numetu
                             WHERE classement_epreuves.numepr = :numepr
                             ORDER BY classement_epreuves.rang");
$classements->bindParam(':numepr', $id, PDO::PARAM_INT);
$classements->execute();
$classements = $classements->fetchAll(PDO::FETCH_ASSOC);

include dirname(__FILE__) . '/../views/card.php';