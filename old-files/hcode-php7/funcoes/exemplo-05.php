<?php

function somar(int ...$valores)
{
  return array_sum($valores);
}

echo somar(2, 2, 2, 2);
