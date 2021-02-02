<?php
  
  //Variaveis
  $vnome = "nome";
  $vnum = 10;
  $vnum2 = 20.5;
  $soma = 0;

  //Constantes
  define("cnome","Bruno");
  define("ver", PHP_VERSION);
  define("dir", __DIR__);

  echo "Nome: $vnome <br/>";
  $vnome = "Campos";
  echo "Nome: $vnome <br/>";
  $vnome = "Bruno";
  echo "Nome: ".$vnome."<br/>";
  $soma = $vnum + $vnum2;
  echo "Resposta: ".$soma."<br/>";

  echo "<hr/>";
  
  echo "Constantes cnome: ".cnome."<br/>";
  echo "Nome do arquivo: ".__FILE__."<br/>";
  echo "Verção do PHP: ".ver."<br/>";
  echo "Pasta: ".dir."<br/>";

  echo "Verção do SO: ".PHP_OS."<br/>";
  echo "Numero de linhas: ".__LINE__."<br/>";

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aula 2 de PHP - Constantes e Variaveis</title>

  </head>
  <body> 
  </body>
</html>