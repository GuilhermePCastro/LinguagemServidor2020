<?php
chdir(__DIR__);

echo "<br> <a href='cadastro.php'>Cadastrar</a>";
echo "  <br><br>
        <center>
        <table border ='1 px' width='50%'>
            <tr>
                <td>ID</td><td>Nome</td><td>E-mail</td>
            </tr>";

foreach($lista as $usu){
    echo "<tr>
            <td>{$usu['PK_ID']}</td><td>{$usu['DS_NOME']}</td><td>{$usu['DS_EMAIL']}</td>
          </tr>";
}

echo "</center></table>";
