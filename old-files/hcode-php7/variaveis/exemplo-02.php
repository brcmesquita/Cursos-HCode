<?php
// camel case
$anoDeNascimento = 1984;
$nomeCompleto = "Bruno Raphael";
$nomeCompleto2 = "Raphael Cabral";

unset($nomeCompleto);

if (isset($nomeCompleto)) {
  echo "Nenhum nome foi digitado.";
} else {
  echo $nomeCompleto2;
}

$nome = "Bruno";
$sobrenome = "Raphael";

$novoNomeCompleto = "<br />" . $nome . " " . $sobrenome;

echo $novoNomeCompleto;
