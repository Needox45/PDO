<?php

require dirname(__FILE__) . '/../../class/enseignant.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$enseignant = new enseignants($db);

$enseignant->fetch($id);

if (isset($_POST['confirm_envoyer'])) {
    $enseignant->hydrate($_POST);
    $enseignant->update();
    header("Location: index.php?element=enseignants&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=enseignants&action=list");
    exit;
}

