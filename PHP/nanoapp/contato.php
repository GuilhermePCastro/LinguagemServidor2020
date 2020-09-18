<?php

require_once 'db.php';

$objSmtm = $objBanco -> prepare("INSERT INTO TB_CONTATO (DS_NOME, DS_CELULAR, DS_EMAIL) VALUES (:DS_NOME, :DS_CELULAR, :DS_EMAIL)");

$objSmtm -> bindparam(':DS_NOME',$_POST['DS_NOME']);
$objSmtm -> bindparam(':DS_CELULAR',$_POST['DS_CELULAR']);
$objSmtm -> bindparam(':DS_EMAIL',$_POST['DS_EMAIL']);

if($objSmtm -> execute()){
    $msg ='Obrigado por se cadastrar!';
}else{
    $msg ='Erro ao se cadastrar';
}

include "grava.php";


//------------------------------------------------------------------------------------
