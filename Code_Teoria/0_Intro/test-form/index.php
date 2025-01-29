<?php
//variabili
$nome = 'Nicola';
$cognome = 'Lippo';
$eta = 26;
#snake case per le variabili
$anno_nascita = 1998;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <form action="form.php" method="GET">
        <h3>Compila il form</h3>
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>
        <hr>
        <div>
            <label for="surname">Cognome</label>
            <input type="text" name="surname" id="surname">
        </div>
        <hr>
        <div>
            <button>Sent</button>
        </div>
    </form>
</body>

</html>