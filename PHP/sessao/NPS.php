<?php 
   require_once 'veriflogin.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NPS</title>

        <style>
            body{
                font-family: sans-serif;
            }
            label {
                display: block;
                font-size: 16px;
            }

            div{
                margin-bottom: 30px;
            }

            fieldset{
                max-width: 500px;
                margin-left: 30%;
            }

            h1{
                margin-left: 48%;
            }

            textarea{
                resize: none;
                width: 470px;
            }
            .exp{
                font-size: 14px;
                display: block;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <?php  include 'header.php'; ?>
        <h1>NPS</h1>
        <form action="npsexec.php" method='POST'>
            <fieldset>
                <h2>Qual a probabilidade de você nos recomendar ?</h2>
                <div>
                    <label for="vl_nota">Escolha de 0 a 10 </label>
                    <input type="number" name="vl_nota" min="0" max="10">
                    <label for="vl_nota" class='exp'>(0 - Pouco provável e 10 - muito provável)</label>
                </div>
                <div>
                    <label for=""">Nos diga o porquê da nota</label>
                    <textarea name="ds_observacao"  cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        
    </body>
</html>