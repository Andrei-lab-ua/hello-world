<?php
error_reporting(0);

$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $id = $_GET["id"];
    $name = $_GET["name"];
    $freq = $_GET["freq"];

    $db = "INSERT INTO processor(ID_Processor,name,frequency) VALUES(:ID_Processor,:name,:frequency)";
    $test = [':ID_Processor' =>$id, ':name' =>$name, ':frequency' =>$freq];

    $ready = $dbh->prepare($db);
    $ready->execute($test);

} catch (PDOException $e) {
    echo "Ошибка";
}