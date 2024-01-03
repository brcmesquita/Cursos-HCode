<?php

abstract class Animal
{

  public function falar()
  {
    return "Som";
  }

  public function mover()
  {
    return "Anda";
  }
}

class Cachorro extends Animal
{

  public function falar()
  {
    return "Late";
  }
}

class Gato extends Animal
{
  public function falar()
  {
    return "Mia";
  }
}

class Passaro extends Animal
{
  public function falar()
  {
    return "Pia";
  }

  public function mover()
  {
    return "Voa e " . parent::mover();
  }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br />";
echo $pluto->mover() . "<br />";

$garfield = new Gato();
echo $garfield->falar() . "<br />";

$piupiu = new Passaro();
echo $piupiu->falar() . "<br />";
echo $piupiu->mover() . "<br />";
