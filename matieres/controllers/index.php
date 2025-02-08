<?php
require dirname(__FILE__) . '/../../class/matieres.class.php';

$matiere = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $matiere = new Matieres($db);
    if (!$matiere->fetch($id)) {
        echo "Matière non trouvée.";
        exit;
    }
}