<?php

function ola()
{
  echo "Olá, mundo!";
}

function ola2()
{
  return "Olá, mundo!";
}

ola();

echo "<br />";

echo ola2();

echo "<br />";

$frase1 = ola();
$frase2 = ola2();

echo strlen($frase1); // Olá, mundo!0
echo "<br />";
echo strlen($frase2); // 12