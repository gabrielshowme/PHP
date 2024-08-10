<?php
require_once("config.php");//adiciona todas as informações no arq 'config.php'
//Definir data  e hora com base no local selecionado.
date_default_timezone_set('America/Sao_Paulo');

//$pdo = new PDO("mysql:dbname=php8;host=localhost","root","");//Cria conexao com o banco de dados.

try{
    $pdo = new PDO("mysql:dbname=$banco; host=$servidor","$usuario","$senha");//Cria conexao com o banco de dados.

}catch (Exception $e){
    echo "Erro ao conrctar com o banco de dados!<p>" . $e ;
}

    ?>