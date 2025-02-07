<?php
//Per poter leggere il contenuto di un file usiamo file_get_contents() che ci restituisce una stringa.
$dati_scuola = file_get_contents('dati_scuola.json');
echo $dati_scuola;
//json_decode
#traduce una stringa da formato json in una variabile PHP
$array_scuola = json_decode($dati_scuola, true);
var_dump($array_scuola);
