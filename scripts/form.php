<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'bantoficial@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$assunto		   = 'Cadastro Landingpage BANT';
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FORMULARIO PREENCHIDO NA LANDING PAGE BANT</P>
<p><b>E-Mail:</b> '.$emailremetente.'
<hr>';

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
if($envio)
    echo "<script>location.href='http://appbant.com/obrigado.html'</script>"; // Página que será redirecionada
?>