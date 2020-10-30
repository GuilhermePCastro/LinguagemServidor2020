<?php
session_start();
include_once "db.php";

/*
$senha = password_hash('123',PASSWORD_DEFAULT);
$objBanco -> Query("INSERT INTO ts_usuario (DS_NOME, DS_SENHA, DS_EMAIL) VALUES ('Guilherme', '$senha', 'guibkk@gmail.com')");


if(isset($_SESSION['login'])){
    include 'menu.php';
    include 'header.php';
    include 'footer.php';
    exit();
}
*/ 
if(!isset($_POST['Entrar'])){

    include 'login.php';

}else{
    
    //Valores do Input
    $email = filter_var($_POST['login'],FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];
    $login = $email;
    //Query do banco
    $result = $objBanco -> query("SELECT DS_SENHA FROM TS_USUARIO WHERE DS_EMAIL = '$email'");

    //Transfomando em array
    $registro = $result -> fetch(PDO::FETCH_ASSOC);

    //Pegandoo hash da senha no banco
    $hash = $registro['DS_SENHA'];

    //Verificando se o hash é da senha informada
    if(password_verify($senha, $hash)){
        echo "Seja bem vindo $login";

        $_SESSION['login'] = $login;
        include 'menu.php';
        include 'header.php';
        include 'footer.php';
    }else{
        echo "Vaza daqui mané!";
    }
}