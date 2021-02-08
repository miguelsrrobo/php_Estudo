<?php

    $VeiculosDeTransport = array("Carro", "Moto", "Bicicleta", "Ônibus", "Avião", "Navio");

    foreach($VeiculosDeTransport as $Veiculo)
    {
        echo "$Veiculo<br/>";
        if($Veiculo == "Bicicleta") break;
    }

    echo "<hr/>";

    foreach($VeiculosDeTransport as $Veiculo)
    {
        if($Veiculo == "Bicicleta")
            echo "Bicicleta na lista<br/>";

        if($Veiculo == "Avião")
            echo "Avião na lista<br/>";
    }

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aula 10 de PHP - Loop - Foreach </title>

  </head>
  <body> 
  </body>
</html>