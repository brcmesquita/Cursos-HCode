<?php

function ola()
{
  $argumentos = func_get_args();
  return $argumentos;
}

var_dump(ola("Bom dia!", "Boa tarde!", "Boa noite!"));

////////////////////////////////////

function ola2()
{
  $argumentos = func_get_args();

  foreach ($argumentos as $argumento) {

    echo $argumento . "<br />";
  }

  return $argumentos;
}

var_dump(ola2());