<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <center>
    <?php 
        if(isset($editado)){
            echo "Editado com sucesso";
        }
        if(isset($erros)){
            if(count($erros) > 0){
                foreach($erros as $erro){
                    echo "$erro". "<br>";
            }
        }
    }
    ?>
    </center>
    <center>
        <form method="POST">
            <fildset>
                <label for="DS_NOME"> Nome:<input type="text" name='DS_NOME' value ="<?php echo $nome;?>"required></label><br><br>
                <label for="DS_EMAIL"> Email:<input type="email" name='DS_EMAIL' value ="<?php echo $email;?>" required></label><br><br>
                <label for="DS_SENHA"> Senha:<input type="password" name='DS_SENHA' required></label><br><br>
                <label for="DS_SENHACONF"> Confirma Senha:<input type="password" name='DS_SENHACONF' required></label><br><br>
                <input type="hidden" name="PK_ID" value="<?php $_GET['editar']?>">
                <input type="submit" name='Alterar' value='Alterar'>
            </fildset>
        </form>
    </center>
</body>
</html>


