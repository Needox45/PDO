<?php

require dirname(__FILE__) . '/../../class/enseignants.class.php';

$list_elements = Enseignants::fetchAll($db);