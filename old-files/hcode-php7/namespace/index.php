<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Raphael Cabral");
$cad->setEmail("brcmesquita@gmail.com");
$cad->setSenha("mysecretpass");

$cad->registrarVenda();
