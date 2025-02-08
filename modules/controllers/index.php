<?php
require dirname(__FILE__) . '/../../class/module.class.php';

$module = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $module = new Modules($db);
    if (!$module->fetch($id)) {
        echo "Module non trouvé.";
        exit;
    }
}