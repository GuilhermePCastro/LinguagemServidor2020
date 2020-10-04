<?php

require_once "db.php";
$objSmtm = $objBanco -> prepare("SELECT * FROM TB_CONTATO WHERE DS_NOME LIKE :DS_NOME");
$like = '%' . $_POST['NOME'] . '%';
$objSmtm -> bindparam(':DS_NOME',$like);
$objSmtm -> execute();
$result = $objSmtm -> fetchall();

if($result){
   
    foreach( $result as $dado){
        echo "ID: {$dado['PK_ID']} | Nome: {$dado['DS_NOME']} |  Celular: {$dado['DS_CELULAR']} | E-mail: {$dado['DS_EMAIL']} | <a href='apagar.php?id={$dado['PK_ID']}'>Apagar</a>  <a href='editar.php?id={$dado['PK_ID']}'>Editar</a> <br>";
        
        /*$cursor[$dado['PK_ID']] = [ 'DS_NOME' => $dado['DS_NOME'],
                                    'DS_CELULAR' => $dado['DS_CELULAR'],
                                    'DS_EMAIL' => $dado['DS_EMAIL']];
       
                                    
                                        foreach($cursor as $id => $reg){
                                            <tr>
                                                <td>$id</td>
                                                <td>{$reg['DS_NOME']}</td>
                                                <td>{$reg['DS_CELULAR']}</td>
                                            </tr>
                                        }
                                    */
    
    }
}else{
    echo 'Não trouxe nenhum registro!';
    echo '<a href="consultar.html">Consultar registros</a>';
}

//  PARA MONTAR NO TABLE É SÓ USAR ESSA LOGICA COM AS TAGS DE HTML

echo '<a href="index.html">Cadastrar contato</a>';