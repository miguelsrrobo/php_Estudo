<?php
  
  //Arrays
  $vetor = array(6);
  $vetor_2 = array("nome"=>"Miguel","cidade"=>"içara","curso"=>"PHP");
  $vetor_3 = array(
    array("carro1",123456),
    array("carro2",15984),
    array("carro3",482619)
    );

  $vetor[0] = "Carro";
  $vetor[1] = "Moto";
  $vetor[2] = "Tanque";
  $vetor[3] = "Onibus";
  $vetor[4] = 123456;
  $vetor[5] = $vetor_2["nome"];
  $corredor = 0;
  $coluna = 0;

  while($corredor < 6)
  {
    echo "Elementos do  vetor = $vetor[$corredor].<br/>";
    $corredor++;
  }

  echo "<hr/>";

  for($linha = 0; $linha < 3;$linha++)
  {
    for($coluna = 0;$coluna < 2;$coluna++)
    {  
      echo "|__".$vetor_3[$linha][$coluna]."__|";
    }  
    echo "<br/>";
  }

  echo "<hr/>";

  echo "Nome = ".$vetor_2["nome"]." - Cidade = ".$vetor_2["cidade"]." - Curso = ".$vetor_2["curso"]."<br/>";

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Aula 4 de PHP - Vetores / Arrays</title>

  </head>
  <body> 
  </body>
</html>