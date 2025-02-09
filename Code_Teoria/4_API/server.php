<?php
//se il file è già stato incluso  non lo includerà di nuovo.
require_once __DIR__ . '/function.php';
//leggiamo un file
$linguaggi = file_get_contents(__DIR__ . '/linguaggi.json');
//eleborazione del dato
$array_linguaggi = json_decode($linguaggi, true);
$result = $array_linguaggi;
$result = array_map('getLinguaggi', $result);
//parametro - stato azione (CRUD) - (create, read, update, delete)
#read
if (isset($_GET['action']) && $_GET['action'] === 'read') {
    if (isset($_GET['idL'])) {
        #array_search: Cerca nell'array un valore dato e restituisce la prima chiave corrispondente
        #array_column: Restituisce i valori da una singola colonna nell'array
        $keyL = array_search($_GET['idL'], array_column($array_linguaggi, 'id'));
        //test con postman troviamo la key, se esiste mostro in posizione key
        if ($keyL !== false) {
            $result = $array_linguaggi[$keyL];
        }
    }
}
#create
/*if (isset($_POST['action']) && $_POST['action'] === 'create') {
    $new_linguaggio = [
        "id" => rand(10, 100),
        "name" => $_POST['text'],
        "fatto" => false,
        "descrizione" => ''
    ];
    $result = [...$array_linguaggi, $new_linguaggio];
    //salvo
    file_put_contents(__DIR__ . '/linguaggi.json', json_encode($result));
}
/**********************/
//modifichiamo chiave di rete che sia json
header('Content-Type: application/json');
#trasformare gli array php in oggetti json!
echo json_encode($result);
