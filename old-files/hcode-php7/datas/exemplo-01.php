<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A, %d de %B de %Y"));

echo "<br>";

echo date("l, d/m/Y H:i:s");

echo "<br>";

echo time();

echo "<br>";

$ts = strtotime("12/07/1984");
echo date("d/m/Y", $ts);
