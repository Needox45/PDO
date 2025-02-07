<?php

require dirname(__FILE__) . '/../../class/module.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$module = new Modules($db);

$module->fetch($id);

if (isset($_POST['confirm_envoyer'])) {
    $module->hydrate($_POST);
    $module->update();
    header("Location: index.php?element=modules&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=modules&action=list");
    exit;
}

