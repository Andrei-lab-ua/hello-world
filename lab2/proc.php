<?php
header('Content-Type: application/json');

$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $proc = $_GET["proc"];

    $pc = "SELECT computer.* FROM computer , processor WHERE computer.FID_Processor = processor.ID_Processor and processor.name =  '". $proc ."'";

    $test = '';
    foreach ($dbh->query($pc) as $row) {
        $test = 'netname:' . '&nbsp;' . $row['netname'] . '&nbsp;' .'</br>';
    }
    echo json_encode($test);
} catch (PDOException $e) {
    echo "Ошибка";
}