<?php

require 'connection.php';
header('Content-Type: application/json');

$test = $_GET['proc'];

$cond=array("software"=> array('$eq' => $test));
$cursor = $db->computer->find($cond);
$result = iterator_to_array($cursor);


$cars = array();

foreach ($result as $key => $value) {
    $cars[] = $value['processor'];
}

echo json_encode($cars);
