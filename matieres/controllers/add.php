<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {
    $new_matiere = new Matieres($db, $_POST);
    $new_matiere->create();
    
    if ($new_matiere->nummat <= 0) {
        header('Location: index.php?element=matieres&action=list');
    } else {
        header('Location: index.php?element=matieres&action=list');
    }
}

?>
