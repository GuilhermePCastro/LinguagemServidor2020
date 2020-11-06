<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php 
        if(isset($erros)){
            if(count($erros) > 0){
                foreach($erros as $erro){
                    echo "$erro". "<br>";
            }
        }
    }
    ?>
    <center>
        <form action="cadastro.php" method="POST">
            <fildset>
                <label for="DS_NOME"> Nome:<input type="text" name='DS_NOME' required></label><br><br>
                <label for="DS_EMAIL"> Email:<input type="email" name='DS_EMAIL' required></label><br><br>
                <label for="DS_SENHA"> Senha:<input type="password" name='DS_SENHA' required></label><br><br>
                <label for="DS_SENHACONF"> Confirma Senha:<input type="password" name='DS_SENHACONF' required></label><br><br>
                <input type="submit" name='gravar' value='gravar'>
            </fildset>
        </form>
    </center>
</body>
</html>
