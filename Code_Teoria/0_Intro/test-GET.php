<?php
//parametri GET inseriti nell'url.
//http://localhost/Code_Teoria/0_Intro/test-get.php?nome-utente=nicola&cognome-utente=lippo
$nome = $_GET['nome-utente'];
$cognome = $_GET['cognome-utente'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Get</title>
</head>

<body>
    <h2>Test $_GET</h2>
    <div>Ciao da <?php echo $nome . ' ' . $cognome ?></div>
</body>

</html>