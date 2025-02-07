<?php

require dirname(__FILE__) . '/../../class/enseignants.class.php';
$new_enseignant = new Enseignants($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_enseignant->fetch($id);

if (isset($_POST['delete'])) {
    header("Location: index.php?element=enseignants&action=delete&id=$id");
}

if (isset($_POST['update'])) {
    header("Location: index.php?element=enseignants&action=update&id=$id");
}