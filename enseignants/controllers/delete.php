<?php

require dirname(__FILE__) . '/../../class/enseignants.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_enseignant = new Enseignants($db);

if (isset($_POST['confirm_envoyer'])) {
    $new_enseignant->fetch($id);
    $new_enseignant->delete();
    header("Location: index.php?element=enseignants&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=enseignants&action=list");
    exit;
}

