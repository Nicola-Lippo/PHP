<?php
$dati_scuola = [
    "studenti" => [
        [
            "nome" => "Marco",
            "cognome" => "Rossi",
            "eta" => 20
        ],
        [
            "nome" => "Giulia",
            "cognome" => "Bianchi",
            "eta" => 22
        ],
        [
            "nome" => "Luca",
            "cognome" => "Verdi",
            "eta" => 19
        ],
        [
            "nome" => "Anna",
            "cognome" => "Ferrari",
            "eta" => 21
        ],
        [
            "nome" => "Davide",
            "cognome" => "Esposito",
            "eta" => 23
        ]
    ],
    "insegnanti" => [
        [
            "nome" => "Mario",
            "cognome" => "Rossi",
            "materia" => "Matematica"
        ],
        [
            "nome" => "Laura",
            "cognome" => "Bianchi",
            "materia" => "Inglese"
        ],
        [
            "nome" => "Giovanni",
            "cognome" => "Verdi",
            "materia" => "Storia"
        ]
    ]
];
//header()
#specificare che le informazioni restituite sono di tipo json a JS
#aggiunge le intestazioni indicate nella risposta HTTP.
header('Content-Type: application/json');
//json_encode
#La funzione json_encode() traduce qualsiasi tipo di dato in formato json.
#trasformare gli array php in oggetti json!
echo json_encode($dati_scuola);
