<?php
//leggiamo un file
$linguaggi = file_get_contents(__DIR__ . '/linguaggi.json');

//modifichiamo chiave di rete che sia json
header('Content-Type: application/json');
echo $linguaggi;
