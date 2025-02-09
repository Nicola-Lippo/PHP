<?php
function getLinguaggi($l)
{
    return [
        "idL" => $l['id'],
        "name" => $l['nome'],
        "done" => $l['fatto']
    ];
}
