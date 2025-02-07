<?php

require dirname(__FILE__) . '/../../class/epreuves.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$epreuve = new Epreuves($db);

$epreuve->fetch($id);

if (isset($_POST['confirm_envoyer'])) {
    $epreuve->hydrate($_POST);
    $epreuve->update();
    header("Location: index.php?element=epreuves&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=epreuves&action=list");
    exit;
}

