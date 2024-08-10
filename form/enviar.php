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

/*O try-catch em PHP é utilizado para tratar exceções, que são erros ou condições inesperadas que ocorrem durante a execução do código.
Quando você usa um bloco try-catch, você tenta executar um pedaço de código que pode lançar uma exceção dentro do bloco try. 
Se uma exceção for lançada, o fluxo de execução do programa é interrompido e o controle passa imediatamente para o bloco catch, 
onde você pode lidar com a exceção de maneira adequada.*/

try {
    mail($remetente, $assunto,$mensagem, $cabecalho);

    
} catch (Exception $e) {
 
    echo "o email não pode ser enviado caso você esteja em  um servidor  Local, hospede seu projeto e depois faça o teste de envio!<p>" .$e; 
}
?>
<script>alert('Enviado com Sucesso');</script>/*Aparece a mensagem entre''*/
<meta http-equiv="refresh" content="0; url=index.php">