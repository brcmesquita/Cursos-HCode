<?php

//$file = fopen("log.txt", "w+"); //cria um novo arquivo e escreve dentro dele
$file = fopen("log.txt", "a+"); //edita o arquivo e insere o texto no final do texto

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";
