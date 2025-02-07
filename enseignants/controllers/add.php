<?php

require dirname(__FILE__) . '/../../class/enseignants.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}

if (isset($_POST['confirm_envoyer'])) {
    $new_enseignant = new Enseignants($db, $_POST);
    $new_enseignant->create();
    
    if ($new_enseignant->numens <= 0) {
        header('Location: index.php?element=enseignants&action=list');
    } else {
        header('Location: index.php?element=enseignants&action=list');
    }
}
?>
