<?php

if(isset($_POST(['email']) && !empty($_POST(['email'])){
$nome = addcslashes($_POST(['name']));
$email = addcslashes($_POST(['email']));
$mensagem = addcslashes($_POST(['message']));

$to = "tecnoblog.com";
$subject = "Contato - Tecnoblog";
$body = "Nome:".$nome. "\r\n"
        "Email:".$email. "\r\n"
        "Mensagem:".$mensagem;
$header ="from:carolinefigueira89@gmail.com"."\r\n"."Reply-To:".$email."\r\n"
."x=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso! ");
}else{
    echo("O email não pode ser enviado ! ")";"
}



}

?>
