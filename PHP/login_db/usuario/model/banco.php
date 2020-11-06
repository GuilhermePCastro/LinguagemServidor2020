<?php
chdir(__DIR__);
require '../../db.php';

function listar(): array{

    //Trasnformando a variavel em global
    global $objBanco;

    $result = $objBanco -> query('SELECT PK_ID, DS_NOME, DS_EMAIL FROM TS_USUARIO');
    $reg = $result -> fetchAll();

    return is_array($reg) ? $reg : [];
}

function existe_email(string $email): bool{

    //Trasnformando a variavel em global
    global $objBanco;

    if(empty($email)) return false;
    $smtm = $objBanco -> prepare('SELECT PK_ID FROM TS_USUARIO WHERE DS_EMAIL = :EMAIL');
    $smtm -> bindParam(':EMAIL', $email);
    $smtm -> execute();

    $array = $smtm -> fetch();
    return isset($array['PK_ID'])  ? true : false;
    var_dump($array);
}