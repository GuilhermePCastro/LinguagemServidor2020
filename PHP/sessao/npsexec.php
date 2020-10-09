<?php
session_start();
include 'db.php';

$nota = $_POST['vl_nota'];
$obs  = $_POST['ds_observacao'];

$objStmt = $objBanco -> prepare('insert into tb_nps (vl_nota, ds_observacao) values (:vl_nota, :ds_observacao)');

$objStmt -> bindparam(':vl_nota',$nota);
$objStmt -> bindparam(':ds_observacao',$obs);

$return = $objStmt -> execute();

if($return){
    echo "<p>Avaliação enviada com sucesso!</p>";
}else{
    echo "<p>Erro ao enviar a avaliação!</p>";
}

echo "<p><br><br> <a href='./agradecimento.php?nota=$nota'>Seguir</a></p>";