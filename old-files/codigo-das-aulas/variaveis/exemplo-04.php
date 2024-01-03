<?php

// arrays super globais
$nome = (string)$_GET["nome"];
$idade = (int)$_GET["idade"];

var_dump($nome, $idade);

$ip = $_SERVER["REMOTE_ADDR"];
$nomeArquivo = $_SERVER["SCRIPT_NAME"];

echo "<br />";
echo $ip;
echo "<br />";
echo $nomeArquivo;


