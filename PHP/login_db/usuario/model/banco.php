<?php
chdir(__DIR__);
require '../../db.php';

function listar(int $id = null): array{

    //Trasnformando a variavel em global
    global $objBanco;

    $cond = '';

    if(!is_null($id)){
        $cond = 'WHERE PK_ID = ' . preg_replace('/\D/','',$id);
    }

    $result = $objBanco -> query("SELECT PK_ID, DS_NOME, DS_EMAIL FROM TS_USUARIO $cond");
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

function gravar_usuario(string $nome, string $email, string $senha): ?int{

    global $objBanco;

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $objBanco -> prepare("INSERT INTO TS_USUARIO 
                                        (DS_NOME, DS_SENHA, DS_EMAIL) 
                                    VALUES 
                                        (:nome, :senha, :email)");

    $stmt -> bindParam(':nome', $nome);
    $stmt -> bindParam(':senha', $senha);
    $stmt -> bindParam(':email', $email);

    $stmt -> execute();

    return $objBanco ->lastInsertId();

}


function apagar_usuario(int $id): bool{

    if(is_numeric($id)){

        global $objBanco;

        if($objBanco -> exec("DELETE FROM TS_USUARIO WHERE PK_ID = $id")){
            return true;
        }else{
            return false;
        }

    }else{
        return false;
    }
}

function editar_usuario(int $id, string $nome, string $email, string $senha): bool{

    global $objBanco;

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $objBanco -> prepare("  UPDATE TS_USUARIO SET 
                                        DS_NOME   = :nome, 
                                        DS_SENHA  = :senha, 
                                        DS_EMAIL  = :email
                                    WHERE 
                                        PK_ID = :id");

    $stmt -> bindParam(':nome', $nome);
    $stmt -> bindParam(':senha', $senha);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':id', $id);

    $stmt -> execute();

    return $objBanco -> lastInsertId();
}
