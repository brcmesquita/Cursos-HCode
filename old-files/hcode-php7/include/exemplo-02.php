<?php

include "exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

$teste = true;

echo ($resultado && $teste);

echo "<br />";

$valorProduto = 14500.00;
$desconto = 5; // 5% de desconto em programação é * 0.05, para isso divida esse valor por 100.

if ($valorProduto > 10000) {
  echo $valorProdutoComDesconto = $valorProduto - ($valorProduto * ($desconto / 100));
  echo "<br />";
  $descontoDado = $valorProduto - $valorProdutoComDesconto;
  echo "Seu desconto: $descontoDado";
}

echo "<br />";
define("SERVIDOR", "127.0.0.1");
echo SERVIDOR;

define("BANCO_DE_DADOS", [
  '127.0.0.1',
  'root',
  'secretpass',
  'test'
]);

echo "<br />";
print_r(BANCO_DE_DADOS);
