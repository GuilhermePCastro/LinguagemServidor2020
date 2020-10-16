<?php
session_start();

$cred = [   0 => [ 'login' => 'gui', 'senha' => '123'],
            1 => [ 'login' => 'adm', 'senha' => 'adm'],
            2 => [ 'login' => 'teste', 'senha' => 'teste']];

if(isset($_SESSION['login'])){
    include 'menu.php';
    include 'header.php';
    include 'footer.php';
    exit();
}

if(!isset($_POST['Entrar'])){

    include 'login.php';

}else{
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $aut = false;
    for($i = 0; $i < count($cred); $i++){
        if($cred[$i]['login'] == $login && $cred[$i]['senha'] == $senha){
            $aut = true;
        }
    }

    if($aut){
        echo "Seja bem vindo $login";

        $_SESSION['login'] = $login;
        include 'menu.php';
        include 'header.php';
        include 'footer.php';
    }else{
        echo "Vaza daqui mané!";
    }
}