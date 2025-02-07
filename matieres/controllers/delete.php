<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_matiere = new Matieres($db);

if (isset($_POST['confirm_envoyer'])) {
    $new_matiere->fetch($id);
    $new_matiere->delete();
    header("Location: index.php?element=matieres&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=matieres&action=list");
    exit;
}

