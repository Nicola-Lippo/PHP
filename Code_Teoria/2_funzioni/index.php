<?php
//variabile fuori dalla funzione
$myVar = 'PHP';
//funzione
#passare la variabile che è fuori dalla funzione altrimenti e indefinita.
function nomeFunzione($arg1, $myVar)
{
    echo $arg1;
    echo $myVar;
}
#evoare la funzione
nomeFunzione('ciao dalla prima funzione in ', $myVar);
//funzioni con return
function testReturn($n1, $n2)
{
    $somma = $n1 + $n2;
    return $somma;
}

$sum = testReturn(5, 6);
var_dump($sum);

//inclusioni di file
#include
include 'vars.php';
echo "Utente: $nome $cognome";
echo '<br>';
#__DIR__
echo __DIR__;
echo '<br>';
#DIR vuole /
include __DIR__ . '/dir.php';
