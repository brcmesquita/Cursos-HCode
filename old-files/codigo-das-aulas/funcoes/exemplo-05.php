<?php

$a = 10;

function trocaValor($a)
{
  $a += 50;

  return $a;
}

echo trocaValor($a);
echo "<br />";
echo $a;
echo "<br />";
////////////////////////////////////

$b = 10;

function trocaValor2(&$b) // &$b é um ponteiro para a variável $b
// para fazermos a passagem de valor por referência, precisamos passar o &
{
  $b += 50;

  return $b;
}

echo trocaValor2($b);
echo "<br />";
echo $b;