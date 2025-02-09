<?php

require dirname(__FILE__) . '/../../class/etudiant.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$etudiant = new Etudiants($db);
$etudiant->fetch($id);

$classements = $db->prepare("SELECT modules.nommod AS nom_module, classement_modules.rang
                             FROM classement_modules
                             JOIN modules ON classement_modules.nummod = modules.nummod
                             WHERE classement_modules.numetu = :numetu
                             ORDER BY classement_modules.rang");
$classements->bindParam(':numetu', $id, PDO::PARAM_INT);
$classements->execute();
$classements = $classements->fetchAll(PDO::FETCH_ASSOC);

include dirname(__FILE__) . '/../views/card.php';