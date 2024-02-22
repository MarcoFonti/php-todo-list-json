<?php

$path = __DIR__ . '/database/task.json';

// LEGGO DAL FILE TASK.JSON I DATI FORNITI
$data = file_get_contents($path);

// CONVERTO LO STRINGONE IN JSON
$tasks = json_decode($data, true);

var_dump($tasks);

die();

// RESTITUISCO UN FORMATO JSON
header('Content-Type: application/json');

// TRASFORMO ARRAY ASSOCIATIVO IN OGETTO JSON
echo json_encode($tasks);

?>