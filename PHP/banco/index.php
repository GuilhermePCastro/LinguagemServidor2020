<?php

// conectando no banco
$db = mysqli_connect('localhost', 'root', '', 'aulaphp');

$retorno = mysqli_query($db, 'SELECT * FROM TB_CONTATO');
if ($retorno){
    echo "Deu bom";
}else{
    echo "Não deu bom";
}

// INSERIDO COM O QUE VEM DO HTML
$query = "INSERT INTO TB_CONTATO
          (DS_NOME, DS_CELULAR, DS_EMAIL)
          VALUES
          ('{$_POST['DS_NOME']}', '{$_POST['DS_CELULAR']}', '{$_POST['DS_EMAIL']}') ";

$retorno = mysqli_query($db, $query);

if ($retorno){
    echo "<br><br>Deu bom a inclusão";
}else{
    echo "<br><br>Não deu bom a inclusão";
}


// MONTANDO TABELA
$query = "SELECT * FROM TB_CONTATO ";
$retorno = mysqli_query($db, $query);

echo "<br><br><pre>";

// estrutura base do table
$tabela = '<table border= 1px>
             <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>Celular</td>
                    <td>E-mail</td>
                </tr>
             </thead>
             <tbody>';

// montando linhas
$linha = '';
while ($queryRetorno = $retorno -> fetch_assoc()){

    $linha = $linha .'<tr>';
    $linha = $linha . '<td>' . $queryRetorno['PK_ID'] . '</td>';
    $linha = $linha . '<td>' . $queryRetorno['DS_NOME'] . '</td>';
    $linha = $linha . '<td>' . $queryRetorno['DS_CELULAR'] . '</td>';
    $linha = $linha . '<td>' . $queryRetorno['DS_EMAIL'] . '</td>';
    $linha = $linha . '</tr>';
}

// juntando linhas
$tabela = $tabela . $linha . '</tbody></table>';
echo $tabela; 




$retornoDelete  = mysqli_query($db,"DELETE FROM TB_CONTATO WHERE PK_ID = 1 ");


if ($retornoDelete){
    echo "Registro apagado";
}else{
    echo "Registro não apagado";
}

// MONTANDO TABELA
$query = "SELECT * FROM TB_CONTATO ";
$retorno = mysqli_query($db, $query);
echo "<br><br><pre>";

// estrutura base do table
$tabela = '<table border= 1px>
             <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>Celular</td>
                    <td>E-mail</td>
                </tr>
             </thead>
             <tbody>';

// montando linhas
$linha = '';
while ($queryRetorno = $retorno -> fetch_assoc()){

    $linha = $linha .'<tr>';
    $linha = $linha . '<td>' . $queryRetorno['PK_ID'] . '</td>';
    $linha = $linha . '<td>' . $queryRetorno['DS_NOME'] . '</td>';
    $linha = $linha . '<td>' . $queryRetorno['DS_CELULAR'] . '</td>';
    $linha = $linha . '<td>' . $queryRetorno['DS_EMAIL'] . '</td>';
    $linha = $linha . '</tr>';
}

// juntando linhas
$tabela = $tabela . $linha . '</tbody></table>';
echo $tabela; 