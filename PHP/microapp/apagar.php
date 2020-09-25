<?php

require_once "db.php";


$id = preg_replace('/\D/','', $_GET['id']);

$result = $objBanco -> Query("DELETE FROM TB_CONTATO WHERE PK_ID = $id");


//
if($result !== false){
    echo '<br>Deletado com sucesso!';
    echo '<a href="consultar.html">Consultar registros</a>';
}else{
    echo '<br>Erro ao deletar!';
    echo '<a href="consultar.html">Consultar registros</a>';
}