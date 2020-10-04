<?php

require_once "db.php";
$consulta = $objBanco -> Query('SELECT * FROM TB_CONTATO', PDO::FETCH_ASSOC);
$cursor = array();

//  PARA MONTAR NO TABLE É SÓ USAR ESSA LOGICA COM AS TAGS DE HTML
foreach( $consulta as $dado){

    echo "ID: {$dado['PK_ID']} | Nome: {$dado['DS_NOME']} |  Celular: {$dado['DS_CELULAR']} | E-mail: {$dado['DS_EMAIL']} | <a href='apagar.php?id={$dado['PK_ID']}'>Apagar</a>  <a href='editar.php?id={$dado['PK_ID']}'>Editar</a> <br>";
    
                                /*
                                    foreach($cursor as $id => $reg){
                                        <tr>
                                            <td>$id</td>
                                            <td>{$reg['DS_NOME']}</td>
                                            <td>{$reg['DS_CELULAR']}</td>
                                        </tr>
                                    }
                                */

}
echo '<a href="index.html">Cadastrar contato</a>';
echo '<br><a href="busca.html">Buscar contato</a>';