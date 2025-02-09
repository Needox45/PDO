<?php

require dirname(__FILE__) . '/../../class/enseignants.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$enseignant = new Enseignants($db);
$enseignant->fetch($id);

if (isset($_POST['confirm_envoyer'])) {

    // Ancien code
    //$enseignant->hydrate($_POST);
    //$enseignant->update();
    $stmt = $db->prepare("CALL modif_enseignant(:numens, :nomens, :preens, :foncens, :adrens, :vilens, :cpens, :telens, :datnaiens, :datembens)");
    $stmt->bindParam(':numens', $id, PDO::PARAM_INT);
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

    header("Location: index.php?element=enseignants&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=enseignants&action=list");
    exit;
}

?>





