<?php

$nome = "Raphael";

function teste(){
  global $nome;
  echo $nome; // só o echo não resolve,
              // precisamos identificar a variável como global
}

function teste2() {
  global $mensagem;
  $mensagem = "Ocorreu um erro!";
}

teste();
teste2();
echo $mensagem;
