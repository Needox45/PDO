<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {

    // Ancien code
    //$new_matiere = new Matieres($db, $_POST);
    //$new_matiere->create();
    $stmt = $db->prepare("CALL ajout_matiere(:nommat, :nummod, :coefmat)");
    $stmt->bindParam(':nommat', $_POST['nommat']);
    $stmt->bindParam(':nummod', $_POST['nummod']);
    $stmt->bindParam(':coefmat', $_POST['coefmat']);
    $stmt->execute();

    header('Location: index.php?element=matieres&action=list');
    exit;
}

?>


