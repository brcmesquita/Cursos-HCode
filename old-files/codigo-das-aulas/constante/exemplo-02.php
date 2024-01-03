<?php

// Exemplo de como criar uma constante que armazena um array
define("BANCO_DE_DADOS", [
  '127.0.0.1',
  'root',
  'password',
  'test'
]);

print_r(BANCO_DE_DADOS);

// Exemplo de como criar uma constante que armazena um array case insensitive
define("BANCO_DE_DADOS2", [
  '127.0.0.1',
  'root',
  'password',
  'test'
], true);

print_r(BANCO_DE_DADOS);