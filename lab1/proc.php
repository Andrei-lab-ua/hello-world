<?php


$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $proc = $_GET["proc"];

    $pc = "SELECT computer.* FROM computer , processor WHERE computer.FID_Processor = processor.ID_Processor and processor.name =  '". $proc ."'";


    foreach ($dbh->query($pc) as $row) {
        echo 'netname:' . '&nbsp;' . $row['netname'] . '&nbsp;' .'</br>';
        echo 'motherboard:' . '&nbsp;' . $row['motherboard'] . '&nbsp;' .'</br>';
        echo 'RAM_capacity:' . '&nbsp;' . $row['RAM_capacity'] . '&nbsp;' .'</br>';
        echo 'HDD_capacity:' . '&nbsp;' . $row['HDD_capacity'] . '&nbsp;' .'</br>';
        echo 'monitor:' . '&nbsp;' . $row['monitor'] . '&nbsp;' .'</br>';
        echo 'vendor:' . '&nbsp;' . $row['vendor'] . '&nbsp;' .'</br>';
        echo 'guarantee:' . '&nbsp;' . $row['guarantee'] . '&nbsp;' .'</br>';
    }
} catch (PDOException $e) {
    echo "Ошибка";
}