<?php

require dirname(__FILE__) . '/../../class/epreuves.class.php';
$new_epreuve = new Epreuves($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_epreuve->fetch($id);

if (isset($_POST['delete'])) {
    header("Location: index.php?element=epreuves&action=delete&id=$id");
}

if (isset($_POST['update'])) {
    header("Location: index.php?element=epreuves&action=update&id=$id");
}