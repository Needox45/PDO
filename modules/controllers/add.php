<?php

require dirname(__FILE__) . '/../../class/module.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {
    $module = new Modules($db, $_POST);
    $module->create();
    
    if ($module->nummod <= 0) {
        header('Location: index.php?element=modules&action=list');
    } else {
        header('Location: index.php?element=modules&action=list');
    }
}

?>
