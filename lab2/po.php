<?php
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");

$dsn = "mysql:host=localhost; dbname=var9";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $po = $_GET["po"];

    $soft = "SELECT computer.* FROM computer , sofrware WHERE computer.ID_Computer = sofrware.ID_Software AND sofrware.name =  '". $po ."'";

    echo '<?xml version="1.0" encoding="utf8" ?>';
    echo "<root>";
    foreach ($dbh->query($soft) as $row) {
        echo '<name>'.'netname:' . '&nbsp;' . $row['motherboard'] . '&nbsp;' .'</br>'.'</name>';
    }
    echo "</root>";
} catch (PDOException $e) {
    echo "Ошибка";
}