<?php


$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $po = $_GET["po"];

    $soft = "SELECT computer.* FROM computer , sofrware WHERE computer.ID_Computer = sofrware.ID_Software AND sofrware.name =  '". $po ."'";


    foreach ($dbh->query($soft) as $row) {
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