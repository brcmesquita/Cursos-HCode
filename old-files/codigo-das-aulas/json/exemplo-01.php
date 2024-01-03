<?php

$pessoas = array();

array_push($pessoas, array(
  'nome' => 'Raphael',
  'idade' => 38
));

array_push($pessoas, array(
  'nome' => 'Bruno',
  'idade' => 38
));

// Para encodar um array em um JSON, usamos a função json_encode()
$jsonEncode = json_encode($pessoas);
echo $jsonEncode;