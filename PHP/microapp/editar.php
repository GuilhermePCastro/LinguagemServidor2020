<?php

require_once "db.php";

// caso seja um update 
if(isset($_POST['PK_ID'])){

    $id = preg_replace('/\D/','', $_POST['PK_ID']);


    $objSmtm = $objBanco -> prepare("UPDATE TB_CONTATO SET
                                        DS_NOME = :DS_NOME, 
                                        DS_CELULAR = :DS_CELULAR, 
                                        DS_EMAIL = :DS_EMAIL
                                    WHERE
                                        PK_ID = $id");

    $objSmtm -> bindparam(':DS_NOME',$_POST['DS_NOME']);
    $objSmtm -> bindparam(':DS_CELULAR',$_POST['DS_CELULAR']);
    $objSmtm -> bindparam(':DS_EMAIL',$_POST['DS_EMAIL']);

    if($objSmtm -> execute()){
        echo 'Alterado com sucesso!';
        echo '<a href="consultar.html">Consultar registros</a>';
    }else{
        echo 'Erro ao alterar';
        echo '<a href="consultar.html">Consultar registros</a>';
    }

}else {
    $id = preg_replace('/\D/','', $_GET['id']);
    
    $contatos = $objBanco -> Query("SELECT * FROM TB_CONTATO WHERE PK_ID = $id", PDO::FETCH_ASSOC);
    $contato = array();

    // transformando em objeto para o formulario aceitar
    foreach($contatos as $registro){
        $contato = $registro;
    }

    include 'edita_contato.php';
}




