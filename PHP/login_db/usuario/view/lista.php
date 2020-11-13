<?php
chdir(__DIR__);

echo "<br><br>";

if(isset($erro)){
    echo  "<center>$erro</center>";
}

echo "<center><br> <a href='cadastro.php'>Cadastrar</a></center>";
echo "  <br><br>
        <center>
        <table border ='1 px' width='50%'>
            <tr>
                <td>ID</td><td>Nome</td><td>E-mail</td><td>Ações</td>
            </tr>";

foreach($lista as $usu){
    echo "<tr>
            <td>{$usu['PK_ID']}</td>
            <td>{$usu['DS_NOME']}</td>
            <td>{$usu['DS_EMAIL']}</td>
            <td><a href='?apagar={$usu['PK_ID']}'>Apagar </a><a href='?editar={$usu['PK_ID']}'> Editar</a></td>
          </tr>";
}

echo "</center></table>";
