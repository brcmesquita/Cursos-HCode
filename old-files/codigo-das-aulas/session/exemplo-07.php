<?php

// Recuperar o ID da sessão
$id = session_id('4f4fi8djl1f8ajr78efj51l53g');

require_once("config.php");

// Regenera o ID da sessão
//session_regenerate_id(); 

// Retorna o ID da sessão
echo session_id();
// algo como ne05f9lqnr5ti2tejuo93238g3

// Retorna todas as variáveis de sessão
var_dump($_SESSION);