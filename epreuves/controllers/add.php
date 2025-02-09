<?php

require dirname(__FILE__) . '/../../class/epreuves.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {
    
    // Ancien code
    //$new_epreuve = new Epreuves($db, $_POST);
    //$new_epreuve->create();
    $stmt = $db->prepare("CALL ajout_note(:numetu, :numepr, :note)");
    $stmt->bindParam(':numetu', $_POST['numetu']);
    $stmt->bindParam(':numepr', $_POST['numepr']);
    $stmt->bindParam(':note', $_POST['note']);
    $stmt->execute();

    header('Location: index.php?element=epreuves&action=list');
    exit;
}

?>


