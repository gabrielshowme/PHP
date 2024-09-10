<?php
require_once("../conexao.php");//para voltar uma pasta usar'../'

$email = $_POST['email'];
$senha = $_POST['senha'];

//'prepare' é um metodo mais seguro para receber do login e senha
$query = $pdo->prepare("SELECT * FROM usuarios where email = :email and senha = :senha ");//Aula 28
$query->bindValue(":email", $email);
$query->bindValue(":senha", $senha);
$query->execute();

/*Recupera todos os resultados da consulta e os armazena em um array associativo, onde as chaves do array correspondem aos 
nomes das colunas da tabela.*/

$res = $query->fetchALL(PDO::FETCH_ASSOC);//fetchALL contém os resultados da consulta SQL ao banco de dados.
$total_reg = count($res);//mostra o total de registro dentro da variavel $res/count() é uma função que retorna o número de elementos em um array.
//$res = $query->fetchAll(PDO::FETCH_ASSOC);: Recupera todos os resultados da consulta e os armazena em um array associativo.
//$total_reg = count($res);: Conta quantos registros foram retornados pela consulta e armazena esse valor na variável $total_reg.

$nivel = $res[0]["nivel"];
echo $nivel;
exit();

if($total_reg > 0){
    echo "<script language='javascript'>window.location='painel-adm'</script>";
}else {
    echo "<script language='javascript'>window.alert('Dados Incorretos')</script>";
    echo "<script language='javascript'>window.location='index.php'</script>";
}



?>