<?php

require dirname(__FILE__) . '/../../class/module.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {

    //$module = new Modules($db, $_POST);
    //$module->create();
    $stmt = $db->prepare("CALL ajout_module(:nommod, :coefmod)");
    $stmt->bindParam(':nommod', $_POST['nommod']);
    $stmt->bindParam(':coefmod', $_POST['coefmod']);
    $stmt->execute();

    header('Location: index.php?element=modules&action=list');
    exit;
}

?>


