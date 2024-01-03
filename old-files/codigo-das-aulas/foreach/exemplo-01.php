<?php

$meses = array(
  "Janeiro", "Fevereiro", "Março",
  "Abril", "Maio", "Junho",
  "Julho", "Agosto", "Setembro",
  "Outubro", "Novembro", "Dezembro"
);

// No foreach, o primeiro parâmentro é sempre a variável do Array
// o $key é sempre a chave, ou índice, ou index
// o $item é sempre o conteúdo
foreach ($meses as $key => $item) { 
  echo ($key+1) . " - $item<br />";
}

echo "<br />";

// No foreach, o primeiro parâmentro é sempre a variável do Array
// o $key não é obrigatório
// o $mes é sempre o conteúdo
foreach ($meses as $mes) { 
  echo $mes . "<br />";
}