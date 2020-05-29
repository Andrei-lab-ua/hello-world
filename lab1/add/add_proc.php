<?php

$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $proc = "SELECT processor.name FROM processor";
    $choose[] = array();
    unset($choose[0]);

    foreach ($dbh->query($proc) as $row) {
        $choose[] .= $row['name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}