<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
#salvo hotels dentro una variabile
$filter_hotels = $hotels;

//filtri per ricerca
#parking
$parking_yes = !empty($_GET['has-parking']);
if ($parking_yes) {
    #array vuoto per ricerca con filtri
    $temp_hotels = [];
    #ciclo con filtro parking
    foreach ($filter_hotels as $hotel) {
        if ($hotel['parking'] === true) {
            array_push($temp_hotels, $hotel);
        }
    }
    #sostituisco i valori filtrati
    $filter_hotels = $temp_hotels;
}
#vote
$has_vote = !empty($_GET['vote']); //valore booleano, vote è un numero(int)
$vote = $_GET['vote'] ?? 0; //int
if ($has_vote) {
    #array vuoto per ricerca con filtri
    $temp_hotels = [];
    #ciclo con filtro parking
    foreach ($filter_hotels as $hotel) {
        if ($hotel['vote'] >= intval($vote)) {
            array_push($temp_hotels, $hotel);
        }
    }
    #sostituisco i valori filtrati
    $filter_hotels = $temp_hotels;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotels</title>
</head>

<body class="container mt-4">
    <!--Parametri di ricerca-->
    <section class="container mt-4">
        <h2 class="text-center mb-4">Filtri Hotels</h2>
        <form class="row g-3 align-items-center" action="index.php" method="GET">
            <!-- Sezione Parcheggio -->
            <div class="col-md-6">
                <div class="form-check">
                    <!--empty = Determina se una variabile è vuota; ! = diverso da-->
                    <input class="form-check-input" type="checkbox" value="1" id="has-parking" name="has-parking"
                        <?php if (!empty($parking_yes)) : ?> checked <?php endif; ?>>
                    <label class="form-check-label" for="has-parking">
                        Solo hotel con parcheggio
                    </label>
                </div>
            </div>

            <!-- Sezione Voto -->
            <div class="col-md-4">
                <select name="vote" class="form-select">
                    <option value="" selected>n/a</option>
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <option value="<?php echo $i; ?>" <?php if (!empty($vote) && $vote == $i) : ?>selected <?php endif; ?>>
                            <?php echo $i; ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

            <!-- Bottone Filtra -->
            <div class="col-md-2 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Filtra</button>
            </div>
        </form>
    </section>

    <hr>
    <!--Tabella Hotel-->
    <section>
        <h2 class="text-center">Tabella Hotels PHP</h2>
        <!-- count = Conta tutti gli elementi in un array(.length js) -->
        <?php if (count($filter_hotels)) : ?>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <!--Restituisce tutte le chiavi o un sottoinsieme delle chiavi di un array-->
                        <?php foreach (array_keys($hotels[0]) as $columnName) : ?>
                            <th><?php echo str_replace('_', ' ', $columnName); ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filter_hotels as $hotel) : ?>
                        <tr>
                            <?php foreach ($hotel as $key => $value) : ?>
                                <td>
                                    <?php
                                    if ($key == 'parking') {
                                        echo ($value == true) ? 'Si' : 'No';
                                    } elseif ($key == 'distance_to_center') {
                                        echo ($value . ' Km');
                                    } else {
                                        echo $value;
                                    } ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <div>Nessun risultato trovato</div>
        <?php endif; ?>
    </section>
</body>

</html>