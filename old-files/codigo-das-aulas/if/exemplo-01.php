<?php

$qualSuaIdade = 66;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {
  echo "Criança";
  exit;
} else if ($qualSuaIdade > $idadeMelhor ) {
  echo "Idoso/Melhor idade";
  exit;
} else {
  echo "Maior/Adulto";
  exit;
}