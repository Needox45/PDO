<?php


require dirname(__FILE__) . '/../../class/etudiant.class.php';
$new_etudiant = new Etudiants($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_etudiant->fetch($id);

if (isset($_POST['delete'])) {
    header("Location: index.php?element=etudiants&action=delete&id=$id");
}

if (isset($_POST['update'])) {
    header("Location: index.php?element=etudiants&action=update&id=$id");
} 