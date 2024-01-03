<?php

$condicao = true;
$contador = 0;

while ($condicao) {
  $numero = rand(1, 20);
  $contador++;

  if ($numero === 17) {
    echo "DEZESSETE!!";
    echo "Tentou: $contador<br />";
    $condicao = false;
  }

  echo "Caiu: $numero<br />";
}