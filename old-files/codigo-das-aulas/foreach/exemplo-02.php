<form>
  <input type="text" name="nome">
  <input type="date" name="nascimento">
  <input type="submit" value="OK">
</form>

<?php

if ( isset($_GET) ) {
  foreach($_GET as $key => $value) {
    echo "Nome do campo: $key <br />";
    echo "Valor do campo: $value <br />";
    echo "<hr />";
  }
}

// RETORNA

// Nome do campo: nome
// Valor do campo: Raphael
// ________________________________
// Nome do campo: nascimento
// Valor do campo: 1984-07-12
