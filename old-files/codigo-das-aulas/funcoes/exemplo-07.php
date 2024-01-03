<?php

function soma(int ...$valores)
{
  return array_sum($valores);
}

echo soma(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
echo "<br />";

echo soma(1, 2, 3, 4, 5);
echo "<br />";

echo soma(6, 7, 8, 9, 0);