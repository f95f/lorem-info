<?php



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Info | Identifique-se</title>
    <link rel="stylesheet" href="styles/style_main.css">

</head>
<body>
    <main>
        <h1>Olá!</h1>
        <h2>Identifique-se:</h2>

        <form method = "post">
            <label for="txtLogin">Usuário</label>
            <input type="text" name="txtLogin" id="txtLogin">
            <label for="txtSenha">senha</label>
            <input type="password" name="txtSenha" id="txtSenha">

            <input type="submit" id = "btnLogin" value = "Entrar">
        </form>

    </main>
</body>
</html>