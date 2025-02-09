<?php

require dirname(__FILE__) . '/../../class/enseignants.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {

    // Ancien code
    //$new_enseignant = new Enseignants($db, $_POST);
    //$new_enseignant->create();

    $stmt = $db->prepare("CALL ajout_enseignant(:nomens, :preens, :foncens, :adrens, :vilens, :cpens, :telens, :datnaiens, :datembens)");
    $stmt->bindParam(':nomens', $_POST['nomens']);
    $stmt->bindParam(':preens', $_POST['preens']);
    $stmt->bindParam(':foncens', $_POST['foncens']);
    $stmt->bindParam(':adrens', $_POST['adrens']);
    $stmt->bindParam(':vilens', $_POST['vilens']);
    $stmt->bindParam(':cpens', $_POST['cpens']);
    $stmt->bindParam(':telens', $_POST['telens']);
    $stmt->bindParam(':datnaiens', $_POST['datnaiens']);
    $stmt->bindParam(':datembens', $_POST['datembens']);
    $stmt->execute();

    header('Location: index.php?element=enseignants&action=list');
    exit;
}

?>

