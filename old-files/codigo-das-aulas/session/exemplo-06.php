<?php

require_once("config.php");

session_regenerate_id(); // Regenera o ID da sessão

echo session_id(); // Retorna o ID da sessão
// algo como ne05f9lqnr5ti2tejuo93238g3

var_dump($_SESSION); // Retorna todas as variáveis de sessão