<?php

$incrementador = 0;
$valor_a_conparar = 8;
$vetor_de_numeros = array($valor_a_conparar);

while ($incrementador <= $valor_a_conparar) {
    echo $incrementador."<br/>";
    $incrementador++;
}

$incrementador = 0;
while ($incrementador <= $valor_a_conparar) {
    $vetor_de_numeros[$incrementador] = 0;
    $incrementador++;
}

$incrementador = 0;
while ($incrementador <= $valor_a_conparar) {
    echo $vetor_de_numeros[$incrementador]."<br/>";
    $incrementador++;
}

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aula 7 de PHP - Loop - Wihle </title>

  </head>
  <body> 
  </body>
</html>