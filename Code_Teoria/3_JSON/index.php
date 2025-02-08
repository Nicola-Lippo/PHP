<?php
//Per poter leggere il contenuto di un file usiamo file_get_contents() che ci restituisce una stringa.
$dati_scuola = file_get_contents('dati_scuola.json');
//json_decode
#traduce una stringa da formato json in una variabile PHP
#true: il secondo parametro dice alla funzione di trasformare gli oggetti JSON in array associativi php.
#elaborazione del dato
$array_scuola = json_decode($dati_scuola, true);
#crud
//header()
#specificare che le informazioni restituite sono di tipo json a JS
#aggiunge le intestazioni indicate nella risposta HTTP.
header('Content-Type: application/json');
//json_encode
#La funzione json_encode() traduce qualsiasi tipo di dato in formato json.
#trasformare gli array php in oggetti json!
echo json_encode($array_scuola);
