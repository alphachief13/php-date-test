<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PhP</title>
</head>
<body>
<?php 
    include './funcoes.php';
?>

    <div class="container">
        <div class="painel-user">
                <h1>Olá, Victor!</h1>
                <p> <?php saudacao() ?> </p>

        </div>

        <ul class="navbar"> 
            <li>Home</li>
            <li>Painel</li>
            <li>Contato</li>
            <li>Sobre</li>
        </ul>
        
    </div>
    
    <div class="php">
            <a href="https://www.php.net" target="_blank"><img src="./elephpant.png" /></a>
        </div>
    
    <p class="p">Clica no elefante!</p>
    <p class="p">Essa página é só um teste com a função date do php!</p>

</body>
</html>

