<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$matiere = new Matieres($db);

$matiere->fetch($id);

if (isset($_POST['confirm_envoyer'])) {
    $matiere->hydrate($_POST);
    $matiere->update();
    header("Location: index.php?element=matieres&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=matieres&action=list");
    exit;
}

