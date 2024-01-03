<?php

// imprimir número de 0 a 9
for ($i = 0; $i < 10; $i++) {
  echo $i . "<br />";
}

// imprimir número de 0 a 995
for ($i = 0; $i < 1000; $i+=5) {
  echo $i . "<br />";
}

// imprimir número de 0 a 995
// mas pulando do 200 ao 800
for ($i = 0; $i < 1000; $i+=5) {
  if ($i > 200 && $i < 800) continue;

  echo $i . "<br />";
}

// imprimir número de 0 a 995
// mas pulando do 200 ao 800
// se chegar à 900, ele para
for ($i = 0; $i < 1000; $i+=5) {
  if ($i > 200 && $i < 800) continue;

  if ($i == 900) break;
  
  echo $i . "<br />";
}

// imprimir todos os anos em uma lista
// sendo de 100 anos atrás até o ano atual
for ($i = date("Y"); $i >= date("Y") - 100; $i--) {
  echo $i . "<br />";
}

// imprimir todos os anos e colocar dentro de um select
echo "<select>";
  for ($i = date("Y"); $i >= date("Y") - 100; $i--) {
    echo "<option valuer='$i'>$i</option>";
  }
echo "</select>";