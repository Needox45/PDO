<?php


require dirname(__FILE__) . '/../../class/etudiant.class.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_etudiant = new Etudiants($db);


if (isset($_POST['confirm_envoyer'])) {
    $new_etudiant->fetch($id);
    $new_etudiant->delete();
    header("Location: index.php?element=etudiants&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=etudiants&action=list");
    exit;
}
 
