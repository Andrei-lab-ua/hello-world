<?php

$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $type = "SELECT sofrware.name FROM sofrware";
    $po[] = array();
    unset($po[0]);

    foreach ($dbh->query($type) as $row) {
        $po[] .= $row['name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}