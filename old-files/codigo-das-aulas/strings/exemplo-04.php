<?php

$frase = "A repetição é a mãe da retenção.";
$mae = "mãe";

$q = strpos($frase, $mae);
echo $q; // 19
echo "<br />";

$texto = substr($frase, 0, $q);
var_dump($texto); // string(19) "A repetição é a "
echo "<br />";

$texto2 = substr($frase, $q + strlen($mae), strlen($frase));
var_dump($texto2); // string(15) " da retenção."





