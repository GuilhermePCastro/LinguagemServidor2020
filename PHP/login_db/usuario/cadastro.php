<?php
session_start();


if(isset($_POST['gravar'])){
    chdir(__DIR__);
    require "model/banco.php";
    require "controller/verif_cadastro.php";
    
    $id = gravar_usuario($_POST['DS_NOME'],$_POST['DS_EMAIL'],$_POST['DS_SENHA']);

    if($id){
        session_start();
        
        $_SESSION['login'] = $_POST['email'];

        header('Location: ../usuario');
    }else{
        $erros = ['Não foi possível criar o usuário!'];
    }
}
chdir(__DIR__);
require '../header.php';
require "view/cadastro_tpl.php";


chdir(__DIR__);
require '../footer.php';