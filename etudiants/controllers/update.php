<?php

require dirname(__FILE__) . '/../../class/etudiant.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$etudiant = new etudiants($db);
$etudiant->fetch($id);

if (isset($_POST['confirm_envoyer'])) {
    $etudiant->hydrate($_POST);
    // Ancien code
    // $etudiant->update();

    // Nouveau code
    $stmt = $db->prepare("CALL modif_etudiant(:numetu, :nometu, :prenometu, :adretu, :viletu, :cpetu, :teletu, :datentetu, :annetu, :remetu, :sexetu, :datnaietu)");
    $stmt->bindParam(':numetu', $id, PDO::PARAM_INT);
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

    header("Location: index.php?element=etudiants&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=etudiants&action=list");
    exit;
}