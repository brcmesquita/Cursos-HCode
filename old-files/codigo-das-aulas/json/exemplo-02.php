<?php

// Para decodar um JSON em um array, usamos a função json_decode()
$json = '[{"nome":"Raphael","idade": 38},{"nome":"Bruno","idade":38}]';

$jsonDecode = json_decode($json, true);
// true para decodificar o JSON em um array
// false para decodificar o JSON em um objeto

var_dump($jsonDecode);