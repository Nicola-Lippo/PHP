<?php
$p = $_GET['paragrafo'];
$badwords = $_GET['badwords'];
//paragrafo censurato con parola sostituita
$censored_text = str_ireplace($badwords, '***', $p);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form ricevuto</title>
</head>

<body>
    <div><?php echo 'Il paragrafo è: ' . $p; ?></div>
    <div><?php echo 'Ed è lungo: '  . strlen($p) . ' caratteri'; ?></div>
    <hr>
    <div><?php echo 'Il paragrafo censurato è: ' . $censored_text; ?></div>
    <div><?php echo 'Ed è lungo: '  . strlen($censored_text) . ' caratteri'; ?></div>
</body>

</html>