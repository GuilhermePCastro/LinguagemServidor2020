<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body{
                font-family: sans-serif;
            }
            fieldset{
                
                max-width: 200px;
                margin-left: 42%;
            }
            div{
                margin-bottom: 20px;
            }
            input[name='Entrar']{
                margin-top: 15px;
            }
            h1{
                text-align: center;
                margin:0px;
                margin-top: 10%;
            }
        </style>
    </head>
    <body>
        <h1>Login</h1>
        <form method = 'POST'>
            <fieldset>
                <div>
                    <label for="login">Login</label>
                    <input type="text" name="login" >
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type='password' name="senha" >
                </div>
                <input type="submit" name='Entrar' value="Entrar">
            </fieldset>
        </form>
    </body>
</html>