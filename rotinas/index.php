<?php 
include_once('../database/conexao.php');

$acao = base64_decode($_POST['acao']);

switch ($acao){
    case 'salvar_cadastro_c':
        salvar_cadastro_c($conexao);
        break;

}

function salvar_cadastro_c($conexao){
    try{
        define('status', 'status');
        define('msg', 'msg');
        
        $nome_completo      = $_POST['nome_completo'];          
        $celular           = $_POST['celular']; 
        $celular           = str_replace('(','',$celular);
        $celular           = str_replace(')','',$celular); 
        $celular           = str_replace('-','',$celular);
        $celular           = str_replace(' ','',$celular);              
        $email              = $_POST['email']; 

        if($nome_completo == ''){
            $mensagem = 'Preencha o campo nome completo';
            $resposta = array(status => false, msg => $mensagem);
            return json_encode($resposta);
            exit;
        }

        if($celular == ''){
            $mensagem = 'Preencha o campo telefone';
            $resposta = array(status => false, msg => $mensagem);
            return json_encode($resposta);
            exit;
        }
        if($email == ''){
            $mensagem = 'Preencha o campo email';
            $resposta = array(status => false, msg => $mensagem);
            return json_encode($resposta);
            exit;
        }
        
        $sql =  "INSERT INTO public.cadastro(nome_completo, celular, email) 
            VALUES('$nome_completo','$celular','$email')";
        print_r($sql);die;
        $resultado = mysqli_query($conexao, $sql);

        if ($resultado){
            $mensagem = 'Cadastro feito com sucesso';
            $resposta = array(status =>true, msg => $mensagem);
        }else{
            $mensagem = 'Erro ao fazer o cadastro';
            $resposta = array(status =>false, msg => $mensagem);
            }

        mysqli_close($conexao);
        echo json_encode($resposta);

    
    } catch (Exception $e) {
        $mensagem = 'Erro ao se comunicar com servidor ' . $e->getMessage();
        $resposta = array(status =>false, msg => $mensagem);
        echo json_encode($resposta);
    }
}

?>