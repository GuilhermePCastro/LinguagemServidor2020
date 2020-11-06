<?php

$nome   = $_POST['DS_NOME'];
$email  = strtolower($_POST['DS_EMAIL']);
$senha  = trim($_POST['DS_SENHA']);
$senhaconf = $_POST['DS_SENHACONF'];

$erros = [];
//Verifica o nome - quantidade de letras
if(strlen($nome) < 2){

    //Assim o PHP gera o indice automaticamente
    $erros[] = 'O nome tem que ter pelo menos duas letras';
}

//Verifica se o email é válido
if(! filter_var($email, FILTER_VALIDATE_EMAIL)){

    $erros[] = 'E-mail inválido!';
    
}elseif(existe_email($email)){

    $erros[] = 'E-mail já existe!';
}

//Verifica o tamanho da senha
if(strlen($senha) < 8){

    //Assim o PHP gera o indice automaticamente
    $erros[] = 'A senha tem que ter pelo menos 8 caracteres';

}elseif ($senha != $senhaconf){  
    
    $erros[] = 'As senhas não são iguais!';
}
