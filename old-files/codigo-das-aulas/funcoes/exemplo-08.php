<?php

function soma(int ...$valores): string // ele fez um casting pra retornar uma string
{
  return array_sum($valores);
}

var_dump(soma(1, 2, 3, 4, 5, 6, 7, 8, 9, 0)); // ele retorna "45", uma string com valor 45