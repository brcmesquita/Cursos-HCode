<?php

$name = "images";

// função is_dir "pra saber se um diretório existe ou não

if (!is_dir($name)) {

  mkdir($name);
  echo "Diretório $name criado com sucesso!";
} else {

  echo "O diretório $name já existe.";
  //rmdir($name); // para remover o diretório
}

// função is_file "pra saber se um arquivo já existe ou não