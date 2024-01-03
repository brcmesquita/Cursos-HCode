<?php

class Carro
{

  private $marca;
  private $modelo;
  private $ano;
  private $motor;

  //
  public function getMarca()
  {
    return $this->marca;
  }

  public function setMarca($marca)
  {
    $this->marca = $marca;
  }

  // 
  public function getModelo()
  {
    return $this->modelo;
  }

  public function setModelo($modelo)
  {
    $this->modelo = $modelo;
  }


  //
  public function getAno()
  {
    return $this->ano;
  }

  public function setAno($ano)
  {
    $this->ano = $ano;
  }

  //
  public function getMotor()
  {
    return $this->motor;
  }

  public function setMotor($motor)
  {
    $this->motor = $motor;
  }

  //
  public function exibir()
  {
    return array(
      "marca" => $this->getMarca(),
      "modelo" => $this->getModelo(),
      "ano" => $this->getAno(),
      "motor" => $this->getMotor()
    );
  }
}

$onix = new Carro();
$onix->setMarca("Chevrolet");
$onix->setModelo("Onix");
$onix->setAno("2017");
$onix->setMotor("1.0");

print_r($onix->exibir());
