<?php
//variabili
$nome = 'Nicola';
$cognome = 'Lippo';
$eta = 26;
#snake case per le variabili
$anno_nascita = 1998;
//debug, stampa a schermo di un array o un oggetto o un json
$array = ['ciao', 41, true];
var_dump($array);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
</head>

<body>
    <!--utilizzo variabili php con echo-->
    <section>
        <h2>Il mio nome è <?php echo $nome ?></h2>
    </section>
</body>

</html>