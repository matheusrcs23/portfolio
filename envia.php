<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem'])

    $para = "matheusrcs23@gmail.com";
    $assunto = "Contatos DEV";

    $corpo = "Nome: ".$nome. "\n". "E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $head = "From "."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$head)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o E-mail");
    }

?>