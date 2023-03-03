<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="2">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel | Lorem Info</title>
    <link rel="stylesheet" href="styles/style_main.css">
</head>
<body>

<header>
    <div id="logomarca">
        <img src="" alt="" id = "logo">
        <h1><?php echo $title; ?></h1>
    </div>

    <div id = "user_greet">
        <h2>Olá, <?php #$_SESSION['user']?></h2>    
    </div>
        
</header>