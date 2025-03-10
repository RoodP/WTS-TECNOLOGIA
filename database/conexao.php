<?php 
    // ini_set('display_errors', 1);
    // error_reporting(E_ALL);

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $db = 'public';

    $conexao = NEW mysqli($servername,$username,$password,$db);
    
    if($conexao->connect_errno){
        die("Erro na conexão com o banco de dados" . $conexao->connect_errno);    
        // return $conexao;
    }else{
        echo "conexao efetuada com sucesso";
    }
    
    
?>