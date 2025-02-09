<?php
require dirname(__FILE__) . '/../../class/etudiant.class.php';

$etudiant = new Etudiants($db);

// Classement général de tous les étudiants par année, regroupant tous les modules de cette année
$annees = [1, 2];
foreach ($annees as $annee) {
    $classementsAnnee = $etudiant->getClassementParAnnee($annee);
    $etudiant->classementsAnnee[$annee] = $classementsAnnee;
}

include dirname(__FILE__) . '/../views/index.php';