<?php

$pessoa = array(
  'nome' => 'Raphael',
  'idade' => 38
);

foreach ($pessoa as &$value) {

  if (gettype($value) === 'integer') $value += 10;

  echo $value . "<br />";
}

print_r($pessoa);