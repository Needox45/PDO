<?php

require dirname(__FILE__) . '/../../class/etudiant.class.php';

if (isset($_POST['cancel'])) {
    $_POST = [];
}



if (isset($_POST['confirm_envoyer'])) {
    $new_etudiant = new Etudiants($db, $_POST);
    $new_etudiant->__create();
    
    if ($new_etudiant->numetu <= 0) {
        header('Location: index.php?element=etudiants&action=list');
    } else {
        header('Location: index.php?element=etudiants&action=list');
    }
}

?>
