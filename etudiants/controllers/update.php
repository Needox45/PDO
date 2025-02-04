<?php


require dirname(__FILE__) . '/../../class/etudiant.class.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$etudiant = new etudiants($db);

$etudiant->fetch($id);



if (isset($_POST['confirm_envoyer'])) {
    $etudiant->hydrate($_POST);
    $etudiant->update();
    header("Location: index.php?element=etudiants&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=etudiants&action=list");
    exit;
}

