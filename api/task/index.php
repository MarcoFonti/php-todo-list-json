<?php

// MODIFICO ARRAY DI OGGETTI FORNITO IN UN ARRAY ASSOCIATIVO
$tasks = [
    [
        "id" => 1,
        "text" => "HTML",
        "done" => false
    ],
    [
        "id" => 2,
        "text" => "CSS",
        "done" => false
    ],
    [
        "id" => 3,
        "text" => "Responsive design",
        "done" => false
    ],
    [
        "id" => 4,
        "text" => "Javascript",
        "done" => false
    ]
];

// RESTITUISCO UN FORMATO JSON
header('Content-Type: application/json');

// TRASFORMO ARRAY ASSOCIATIVO IN OGETTO JSON
echo json_encode($tasks);

?>