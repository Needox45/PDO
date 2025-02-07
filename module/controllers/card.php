<?php

require dirname(__FILE__) . '/../../class/module.class.php';
$module = new Modules($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$module->fetch($id);

if (isset($_POST['delete'])) {
    header("Location: index.php?element=modules&action=delete&id=$id");
}

if (isset($_POST['update'])) {
    header("Location: index.php?element=modules&action=update&id=$id");
}