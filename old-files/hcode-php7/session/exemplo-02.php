<?php

require_once("config.php");



if (isset($_SESSION["nome"])) {
  echo $_SESSION["nome"];
} else {
  echo "Você deve fazer login para continuar.";
}
