<?php

require dirname(__FILE__) . '/../../class/epreuves.class.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$new_epreuve = new Epreuves($db);

if (isset($_POST['confirm_envoyer'])) {
    $new_epreuve->fetch($id);
    $new_epreuve->delete();
    header("Location: index.php?element=epreuves&action=list");
    exit;
} else if (isset($_POST['cancel'])) {
    header("Location: index.php?element=epreuves&action=list");
    exit;
}

