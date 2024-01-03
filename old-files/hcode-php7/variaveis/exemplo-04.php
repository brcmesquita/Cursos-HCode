<?php

$nome = $_GET["a"];

var_dump($nome);

// ------------
echo "<br />";

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

$nome2 = "Raphael";
$nome3 = "Cabral";

echo "<br />";
$nomeCompleto = "$nome2 $nome3";
echo $nomeCompleto;

echo "<br />";
$nomeCompleto3 = strtolower($nomeCompleto);
echo $nomeCompleto3;

echo "<br />";
$nomeCompleto2 = strtoupper($nomeCompleto);
echo $nomeCompleto2;

echo "<br />";
$nomeCompleto2 = str_shuffle($nomeCompleto);
echo $nomeCompleto2;

echo "<br />";
$nomeCompleto2 = strlen($nomeCompleto);
echo $nomeCompleto2;

echo "<br />";
$nomeCompleto2 = str_word_count($nomeCompleto); // contar palavras
echo $nomeCompleto2;

echo "<br />";
$nomeCompleto2 = ucfirst($nomeCompleto); // contar palavras
echo $nomeCompleto2;

echo "<br />";
$nomeCompleto2 = ucfirst($nomeCompleto); // contar palavras
$nomeCompleto2 = str_replace("R", "C", $nomeCompleto);
$nomeCompleto2 = str_replace("C", "R", $nomeCompleto);
echo $nomeCompleto2;

echo "<br />";
$frase = "A repetição é a mãe da retenção";
$q = strpos($frase, "mãe");
var_dump($q);
echo "<br />";
$texto = substr($frase, 0, $q);
var_dump($texto);
