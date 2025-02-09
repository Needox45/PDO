<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$matiere = new Matieres($db);
$matiere->fetch($id);

if (isset($_POST['confirm_envoyer'])) {
    
    // Ancien code
    //$matiere->hydrate($_POST);
    //$matiere->update();
    $stmt = $db->prepare("CALL modif_matiere(:nummat, :nommat, :nummod, :coefmat)");
    $stmt->bindParam(':nummat', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nommat', $_POST['nommat']);
    $stmt->bindParam(':nummod', $_POST['nummod'], PDO::PARAM_INT);
    $stmt->bindParam(':coefmat', $_POST['coefmat'], PDO::PARAM_INT);
    $stmt->execute();

    header("Location: index.php?element=matieres&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=matieres&action=list");
    exit;
}

?>


