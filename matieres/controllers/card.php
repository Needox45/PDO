<?php

require dirname(__FILE__) . '/../../class/matieres.class.php';
$new_matiere = new Matieres($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_matiere->fetch($id);

if (isset($_POST['delete'])) {
    header("Location: index.php?element=matieres&action=delete&id=$id");
}

if (isset($_POST['update'])) {
    header("Location: index.php?element=matieres&action=update&id=$id");
}