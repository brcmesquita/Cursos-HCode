<?php

$nome = "Bruno Raphael";
$sobrenome = "Cabral de Mesquita";
$anoDeNascimento = 1984;

echo $nome . "<br />";
echo $sobrenome . "<br />";

$nomeCompleto = $nome . " " . $sobrenome;

unset($nomeCompleto); // remove o conteúdo de uma variável

// para o programa funcionar, precisei comentar a linha abaixo
//echo $nomeCompleto; // vai dar um erro, pois a variável sofreu um unset

// para evitarmos erros na aplicação, é bom verificar antes de tentar imprimir
// com o isset, podemos verificar se uma ou mais variáveis estão setadas ou não
// isset($variavel)
// isset($variavel1, $variavel2, $variavel3)
if ( isset($nomeCompleto) ) {
  echo $nomeCompleto;
} else {
  //$nomeCompleto = $nome . " " . $sobrenome;
  //echo $nomeCompleto;
  echo $nomeCompleto = $nome . " " . $sobrenome;

}





