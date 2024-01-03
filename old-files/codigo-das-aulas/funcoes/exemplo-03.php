<?php

function ola($texto)
{
  return "Olá, $texto!<br />";
}

echo ola("mundo");
echo ola("Raphael");
echo ola("gostoso");
////////////////////////////////////

function ola2($texto = "mundo")
{
  return "Olá, $texto!<br />";
}

echo ola2();
////////////////////////////////////

function ola3($texto = "mundo", $periodo = "Bom dia!")
{
  return "Olá, $texto! $periodo<br />";
}

echo ola3("Raphael", "Boa noite!");
////////////////////////////////////

function ola4($texto = "mundo", $periodo) // $periodo é obrigatório
{
  return "Olá, $texto! $periodo<br />";
}

echo ola4("Raphael", "Boa noite!");