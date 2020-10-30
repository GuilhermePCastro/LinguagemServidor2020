<?php
define( 'DSN', 'mysql:dbname=aulaphp;host=localhost'); //driver, nome banco, server
define( 'DBUSER', 'root'); //usuário
define( 'DBPASS', ''); // senha

$db = new PDO(DSN, DBUSER, DBPASS);

$_GET['id'] = $_GET['id'] ?? null;

if($_GET['id']){
    $id = preg_replace('/\D/','', $_GET['id']);
    $query = "DELETE FROM TB_CONTATO WHERE PK_ID = $id ";

    $result = $db -> Query($query);
    if($result){
        echo "Registro $id apagado com sucesso!";
    }else{
        echo "Erro ao apaagr o registro";
    }
}