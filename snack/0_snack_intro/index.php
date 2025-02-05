<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parole da censurare</title>
</head>

<body>
    <!--action indica la pagina da chiamare, method GET (in chiaro nella barra degli indirizzi)-->
    <form action="form.php" method="GET">
        <h3>Compila il form</h3>
        <div>
            <!--name serve per la barra degli indirizzi-->
            <label for="p">Paragrafo</label>
            <input type="text" name="paragrafo" id="p">
        </div>
        <hr>
        <div>
            <label for="bad">Badwords</label>
            <input type="text" name="badwords" id="bad">
        </div>
        <hr>
        <div>
            <button>Sent</button>
        </div>
    </form>
</body>

</html>