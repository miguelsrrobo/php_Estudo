<?php

// IF-ELSE

$nota = 50;

if($nota >= 70)
{
  echo "<font color = #blue> Aprovado </font><br/>";
}
else if($nota >= 50)
{
  echo "<font color = #orange> Recuperação </font><br/>";
}
else
{
  echo "<font color = #red> Reprovado </font><br/>";
}

if(($nota >= 40) & ($nota <= 60))
{
    echo "Aluno selecionado<br/>";
}
else
{
    echo "Aluno fora da faicha<br/>";
}


?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aula 4 de PHP - Vetores / Arrays</title>

  </head>
  <body> 
  </body>
</html>