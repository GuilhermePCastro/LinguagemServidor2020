<?php

require_once "db.php";

$consulta = $objBanco -> Query('SELECT * FROM TB_CONTATO', PDO::FETCH_ASSOC);

$i = 0;
foreach( $consulta as $dado){

    if( $i === 0){
        $id = $dado['PK_ID'];
    }
    echo "ID: {$dado['PK_ID']} | Nome: {$dado['DS_NOME']} |  Celular: {$dado['DS_CELULAR']} | E-mail: {$dado['DS_EMAIL']} <br>";

    $i++;
}

$consulta = $objBanco -> Query("DELETE FROM TB_CONTATO WHERE PK_ID = $id");

echo "<br> Após deletar (deletou o ID $id)<br><br>";

$result = $objBanco -> Query("UPDATE TB_CONTATO SET DS_NOME = 'Rogério' WHERE DS_NOME = 'Joãozinho'");
$consulta = $objBanco -> Query('SELECT * FROM TB_CONTATO', PDO::FETCH_ASSOC);

foreach( $consulta as $dado){

    echo "ID: {$dado['PK_ID']} | Nome: {$dado['DS_NOME']} |  Celular: {$dado['DS_CELULAR']} | E-mail: {$dado['DS_EMAIL']} <br>";

}