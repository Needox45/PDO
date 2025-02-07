<?php

require dirname(__FILE__) . '/../../class/module.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$module = new Modules($db);

if (isset($_POST['confirm_envoyer'])) {
    $module->fetch($id);
    $module->delete();
    header("Location: index.php?element=modules&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=modules&action=list");
    exit;
}

