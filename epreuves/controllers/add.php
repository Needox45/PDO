<?php

require dirname(__FILE__) . '/../../class/epreuves.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {
    $new_epreuve = new Epreuves($db, $_POST);
    $new_epreuve->create();
    
    if ($new_epreuve->numepr <= 0) {
        header('Location: index.php?element=epreuves&action=list');
    } else {
        header('Location: index.php?element=epreuves&action=list');
    }
}
?>
