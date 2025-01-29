<?php
//Possiamo passare degli attributi direttamente dalla console che potremo recuperare e utilizzare dentro il nostro script.
//php test-script.php nicola
echo $argv[0];
$name = $argv[1];

echo 'ciao ' . $name;
