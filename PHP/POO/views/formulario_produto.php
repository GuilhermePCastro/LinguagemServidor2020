<?php chdir(__DIR__);?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de produto</title>
    </head>
    <body>
        <center>
            <?php 
                if(isset($msg)){
                    echo "<h1>$msg</h1>";
                }
            ?>
            <form method="POST" >
                <table>
                    <tr>
                        <td>Nome: <input type="text" name="nome" ></td>
                    </tr>

                    <tr>
                        <td>Descrição: <input type="text" name="desc" ></td>
                    </tr>
                    
                    <tr>
                        <td>Preço: <input type="text" name="preco" ></td>
                    </tr>
                    
                    <tr>
                        <td><input type="submit" name='gravar' value='gravar'></td>
                    </tr>
                        
                </table>
            </form>
        </center>
    </body>
</html>