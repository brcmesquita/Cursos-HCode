<?php

$a = 10;

function trocaValor($a)
{

  $a = 50;

  return $a;
}

echo $a; // $a = 10
echo "<br />";

echo trocaValor($a); // $a = 50
echo "<br />";

echo $a; // $a = 10
