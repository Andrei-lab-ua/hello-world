<?php

$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $gu = "SELECT computer.guarantee FROM computer WHERE computer.guarantee = 'no'";
    $fuc[] = array();
    unset($fuc[0]);

    foreach ($dbh->query($gu) as $row) {
        $fuc[] .= $row['guarantee'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}