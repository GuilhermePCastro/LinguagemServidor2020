<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editar.php" method="POST">
        <h1>Editar contato</h1>
        <input type="hidden" name='PK_ID' value="<?php echo $contato['PK_ID'] ?>" >
        <label for="DS_NOME"> Nome:<input type="text" name='DS_NOME' value="<?php echo $contato['DS_NOME'] ?>"></label>
        <label for="DS_CELULAR"> Celular:<input type="text" name='DS_CELULAR' value="<?php echo $contato['DS_CELULAR'] ?>"></label>
        <label for="DS_EMAIL"> Email:<input type="email" name='DS_EMAIL' value="<?php echo $contato['DS_EMAIL'] ?>"></label>
        <input type="submit" value='gravar'>
    </form>
    <a href="consultar.html">Consultar registros</a>
</body>
</html>