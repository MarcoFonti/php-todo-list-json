<?php
// RECUPERO FILE JSON
$path = __DIR__ . './database/task.json';

// LEGGO DAL FILE TASK.JSON I DATI FORNITI
$data = file_get_contents($path);

// CONVERTO LO STRINGONE IN JSON
$tasks = json_decode($data, true);

// CREAMO UNO NUOVO TASK
$new_task_text = $_POST['task'] ?? '';

// SE ARRIVA UN NUOVO TASK LO METTO IN UN ARRAY ASSOCIATIVO POI LO AGGIUNGO 
if ($new_task_text) {
    
    // ARRAY ASSOCIATIVO
    $new_task = [
        "id" => count($tasks) + 1,
        "text" => $new_task_text,
        "done" => false
    ];
    
    // AGGIUNGO ARRAY ASSOCIATIVO A TASKS
    $tasks[] = $new_task;

    // TRASFORMO ARRAY ASSOCIATIVO IN UNA STRINA JSON
    $updated_data = json_encode($tasks);

    // SOVRASCRIVO IL FILE JSON CON IL TASK NUOVO
    file_put_contents($path, $updated_data);
}

// RESTITUISCO UN FORMATO JSON
header('Content-Type: application/json');

// TRASFORMO ARRAY ASSOCIATIVO IN OGETTO JSON
echo json_encode($tasks);

?>