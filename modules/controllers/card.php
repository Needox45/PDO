<?php

require dirname(__FILE__) . '/../../class/module.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$module = new Modules($db);
$module->fetch($id);

$classements = $db->prepare("SELECT etudiants.nometu AS nom_etudiant, classement_modules.rang
                             FROM classement_modules
                             JOIN etudiants ON classement_modules.numetu = etudiants.numetu
                             WHERE classement_modules.nummod = :nummod
                             ORDER BY classement_modules.rang");
$classements->bindParam(':nummod', $id, PDO::PARAM_INT);
$classements->execute();
$classements = $classements->fetchAll(PDO::FETCH_ASSOC);

include dirname(__FILE__) . '/../views/card.php';