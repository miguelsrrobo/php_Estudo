<?php

if(isset($_POST["email"]) && !empty($_POST["email"]))
{

$nome = addslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);

$to = "guegosilvestre67@gmail.com";
$subject = "Contato programador Br";
$bory = "Nome: ".$nome."\n".
        "Email: ".$email."\n".
        "Mensagem: ".$mensagem;
$header = "From:guegosilvestre67@gmail.com"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$bory,$header))
{
    echo("Email enviado com susesso!");
}
else
{
    echo("O Email não pode ser enviado!!");
}

}

?>