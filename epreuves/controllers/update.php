<?php

require dirname(__FILE__) . '/../../class/epreuves.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$epreuve = new Epreuves($db);
$epreuve->fetch($id);

if (isset($_POST['confirm_envoyer'])) {

    //$epreuve->hydrate($_POST);
    //$epreuve->update();

    $stmt = $db->prepare("CALL modif_note(:numetu, :numepr, :note)");
    $stmt->bindParam(':numetu', $_POST['numetu']);
    $stmt->bindParam(':numepr', $id, PDO::PARAM_INT);
    $stmt->bindParam(':note', $_POST['note']);
    $stmt->execute();

    header("Location: index.php?element=epreuves&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=epreuves&action=list");
    exit;
}

?>


