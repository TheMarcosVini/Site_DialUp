<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "vinicius_potato@hotmail.com";
    $subject = "Contato - Dial Up";
    $body = "Nome:".$nome."\n".
            "Email:".$email."\n".
            "Mensagem:".$mensagem;

    $header = "From:dialup_inc@hotmail.com"."\r\n"."Reply-To:".$email."\e\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)) {
        echo("Email enviado com sucesso");
    }else{
        echo("Email não pode ser enviado");
    }

}



?>