<?php

try {
    $bdd = new PDO('mysql:host=db5000339360.hosting-data.io:3306;dbname=dbs330171;charset=utf8', 'dbu455755', 'Yfjezrd9wd&');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

return $bdd;