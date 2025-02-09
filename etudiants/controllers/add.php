<?php

require dirname(__FILE__) . '/../../class/etudiant.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {
    $new_etudiant = new Etudiants($db, $_POST);
    // Ancien code
    // $new_etudiant->create();
    
    // Nouveau code
    $stmt = $db->prepare("CALL ajout_etudiant(:nometu, :prenometu, :adretu, :viletu, :cpetu, :teletu, :datentetu, :annetu, :remetu, :sexetu, :datnaietu)");
    $stmt->bindParam(':nometu', $_POST['nometu']);
    $stmt->bindParam(':prenometu', $_POST['prenometu']);
    $stmt->bindParam(':adretu', $_POST['adretu']);
    $stmt->bindParam(':viletu', $_POST['viletu']);
    $stmt->bindParam(':cpetu', $_POST['cpetu']);
    $stmt->bindParam(':teletu', $_POST['teletu']);
    $stmt->bindParam(':datentetu', $_POST['datentetu']);
    $stmt->bindParam(':annetu', $_POST['annetu']);
    $stmt->bindParam(':remetu', $_POST['remetu']);
    $stmt->bindParam(':sexetu', $_POST['sexetu']);
    $stmt->bindParam(':datnaietu', $_POST['datnaietu']);
    $stmt->execute();

    if ($new_etudiant->numetu <= 0) {
        header('Location: index.php?element=etudiants&action=list');
    } else {
        header('Location: index.php?element=etudiants&action=list');
    }
}

?>



