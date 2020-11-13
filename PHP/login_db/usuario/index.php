<?php

chdir(__DIR__);
require '../sessao.php';

require '../header.php';
require 'model/banco.php';

if(isset($_GET['apagar'])){
    
    if(!apagar_usuario($_GET['apagar'])){
        $erro = 'Erro ao tentar apagar o registro';
    }
   
}


if(isset($_POST['Alterar'])){
    
    chdir(__DIR__);
    require "controller/verif_cadastro.php";
    if(!editar_usuario($_POST['PK_ID'], $_POST['DS_NOME'], $_POST['DS_EMAIL'], $_POST['DS_SENHA'])){
        $erros = ['Erro ao tentar editar'];
    }else{
        $editado = true;
    }
}




if(isset($_GET['editar'])){

    $usuario = listar($_GET['editar']);

    $nome = $usuario[0]["DS_NOME"] ?? '';
    $email =  $usuario[0]["DS_EMAIL"] ?? '';
    require 'view/editar.php';
    exit();
}

$lista = listar();

require 'view/lista.php';
chdir(__DIR__);
require '../footer.php';
