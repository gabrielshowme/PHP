<?php
$nome = $_POST['nome'];/*Conteúdo que chegar para mim via POST do campo 'nome'*/
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto =  "Email do Site";
$remetente =  'gabriel.cage@gmail.com'  ;    

echo $nome;
echo $email;
echo $mensagem;

$conteudo = utf8_decode('Nome: ' .$nome ."\r\n"."\r\n"."\r\n". '
Email:'.$email ."\r\n"."\r\n". 'Mensagem:' . $mensagem."\r\n"."\r\n");

$cabeçalho = "From: " .$email;

mail($remetente, $assunto,$mensagem, $cabecalho);
?>