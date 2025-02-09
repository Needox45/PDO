<?php

require dirname(__FILE__) . '/../../class/module.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$module = new Modules($db);
$module->fetch($id);

if (isset($_POST['confirm_envoyer'])) {

    //$module->hydrate($_POST);
    //$module->update();

    $stmt = $db->prepare("CALL modif_module(:nummod, :nommod, :coefmod)");
    $stmt->bindParam(':nummod', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nommod', $_POST['nommod']);
    $stmt->bindParam(':coefmod', $_POST['coefmod']);
    $stmt->execute();

    header("Location: index.php?element=modules&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=modules&action=list");
    exit;
}

?>


