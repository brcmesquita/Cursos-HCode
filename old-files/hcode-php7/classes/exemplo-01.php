<?php

class Pessoa
{

  public $nome; // atributo

  public function falar() // método
  {
    return "O meu nome é " . $this->nome;
  }
}

$raphael = new Pessoa();

$raphael->nome = "Raphael Cabral";
echo $raphael->falar();
