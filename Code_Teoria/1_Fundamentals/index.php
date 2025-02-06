<?php
//VARIABILI + ISTRUZIONI CONDIZIONALI
#L'operatore ?? restituisce il primo operando se esiste e non è null, altrimenti restituisce il secondo operando.
$age = $_GET['age'] ?? 18;
$risposta = '';
echo $age;
echo '<br>';
if ($age < 18) {
    $risposta = 'Utente minorenne';
} elseif ($age >= 70) {
    $risposta = 'Utente aziano';
} else {
    $risposta = 'Utente normale';
};
//CONCATENAZIONE
$name = 'Nicola';
$test_1 = 'il mio nome é ' . $name;
$test_2 = "il mio nome è \"$name\"";
$test_3 = "il mio nome è {$name}";
//ARRAY
#indice numerico
$array_1 = ['valore 1', 'valore 2', 12, true];
#associativo (se non specifichi la chiave prende l'indice numerico(Maschio))
$array_2 = ['nome' => 'Nicola', 'cognome' => 'Lippo', 'Maschio'];
#aggiungere un elemento ad un array indice numerico
$array_1[] = 'valore 3 aggiunto';
#aggiungere/modificare un elemento ad un array associativo
$array_2['eta'] = 26;
$array_2['cognome'] = 'Rossi Modificato';
#array push
$frutta = array("orange", "banana");
array_push($frutta, "apple", "raspberry");
#array multidimensionali
$teams = [
    [
        "nome" => "Marco",
        "cognome" => "Rossi",
        "eta" => 30,
        "lavoro" => "Sviluppatore"
    ],
    [
        "nome" => "Anna",
        "cognome" => "Bianchi",
        "eta" => 28,
        "lavoro" => "Designer"
    ]
];
//CICLI
#for
echo '<h3>Cicli</h3>';
echo '<p>For</p>';
for ($i = 0; $i <= 10; $i++) {
    echo $i . ' ';
}
#foreach
echo '<p>Foreach</p>';
$prodotti = ["Pane", "Latte", "Uova", "Pasta", "Mele"];
foreach ($prodotti as $key => $prodotto) {
    echo $key . ' - ' . $prodotto;
    echo '<br>';
}
echo '<br>';
#forech array associativi
foreach ($array_2 as $key => $persona) {
    if ($key == 'nome') {
        echo $persona;
    }
}
echo '<br>';
#forech array multidimensionali
$categorie = [
    "mammiferi" => ["Leone", "Elefante", "Cane", "Gatto"],
    "volatili" => ["Aquila", "Pappagallo", "Gufo"]
];
foreach ($categorie as $categoria) {
    var_dump($categoria);
    echo '<br>';
    foreach ($categoria as $key => $animale) {
        echo $key . ' - ' . $animale;
        echo '<br>';
    }
}
echo '<br>';
#prendere un elemento
echo 'Elemento selezionato ' . $categorie['mammiferi'][1];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP foundamentals</title>
</head>

<body>
    <h3>Tipo di utente</h3>
    <div><?php echo $risposta; ?></div>
    <hr>
    <h3>Concatenazioni</h3>
    <div><?php echo $test_1; ?></div>
    <div><?php echo $test_2; ?></div>
    <div><?php echo $test_3; ?></div>
    <hr>
    <h3>Array</h3>
    <p>Indice numerico</p>
    <div> <?php var_dump($array_1); ?></div>
    <!--accedere al valore di una chiave-->
    <div><?php echo $array_1[0]; ?></div>
    <p>Associativo</p>
    <div> <?php var_dump($array_2); ?></div>
    <!--accedere al valore di una chiave-->
    <div><?php echo $array_2['nome']; ?></div>
    <p>Array push</p>
    <div> <?php print_r($frutta); ?></div>
    <p>Array multidimensionali</p>
    <div> <?php var_dump($teams); ?></div>
    <p>Cicli Foreach con array multidimensionali</p>
    <?php foreach ($categorie as $key => $categoria) : ?>
        <h2><?php echo $key; ?></h2>
        <ul>
            <?php foreach ($categoria as $animale) : ?>
                <li><?php echo $animale; ?></li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>
</body>

</html>