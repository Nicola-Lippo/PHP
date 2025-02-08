<?php
//array php
$linguaggi = [
    [
        "nome" => "PHP",
        "fatto" => false
    ],
    [
        "nome" => "JavaScript",
        "fatto" => true
    ],
    [
        "nome" => "Python",
        "fatto" => false
    ],
    [
        "nome" => "Java",
        "fatto" => false
    ],
    [
        "nome" => "C++",
        "fatto" => true
    ],
    [
        "nome" => "Html",
        "fatto" => true
    ]
];
//modifichiamo chiava da rete che sia json
header('Content-Type: application/json');
//trasformazione in json
echo json_encode($linguaggi);
