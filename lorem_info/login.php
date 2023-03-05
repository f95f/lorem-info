<?php

    $errorMessage = 'aa';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Info | Identifique-se</title>
    
    <link rel="stylesheet" href="styles/style_common.css">
    <link rel="stylesheet" href="styles/style_login.css">
</head>
<body>
    <main>
        <div id = "loginForm">
            <h1>Bem-vindo!</h1>
            <h2>Identifique-se:</h2>
            <form method = "post">
                <label for="txtLogin">Usuário</label><br>
                <input type="text" name="txtLogin" id="txtLogin"><br>
                <label for="txtSenha">senha</label><br>
                <input type="password" name="txtSenha" id="txtSenha"><br>
                <input type="submit" id = "btnLogin" value = "Entrar">
                <p><?php echo $errorMessage; ?></p>
            </form>
        </div>
        <div id="loginImg">

        </div>
    </main>
</body>
</html>