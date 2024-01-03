<?php

require_once("config.php");

echo session_save_path(); // Retorna o caminho para salvar a sessão

echo "<br />";

var_dump(session_status()); // Retorna o status da sessão

echo "<br />";

switch (session_status()) {
  case PHP_SESSION_DISABLED:
    echo "Sessões estão desabilitadas";
    break;
  case PHP_SESSION_NONE:
    echo "Sessões estão habilitadas, mas nenhuma existe";
    break;
  case PHP_SESSION_ACTIVE:
    echo "Sessões estão habilitadas e uma existe";
    break;
}