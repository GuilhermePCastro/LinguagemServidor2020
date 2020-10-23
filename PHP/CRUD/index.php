<?php 

// conexão para o db
define( 'DSN', 'mysql:dbname=aulaphp;host=localhost'); //driver, nome banco, server
define( 'DBUSER', 'root'); //usuário
define( 'DBPASS', ''); // senha

$db = new PDO(DSN, DBUSER, DBPASS);

$sql = 'SELECT * FROM TB_CONTATO';

echo '<pre>';
foreach ($db ->query($sql) as $key ) {
    echo "Nome:{$key['DS_NOME']}</BR>";
}
