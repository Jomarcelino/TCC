<?php
session_start();
include("servidor.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style-login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <!-- login form -->
        <div class="login-form">
            <div class="title">Login</div>
            <form action="procLogin.php" method="post">

                <div class="input-box">
                    <i class="fa fa-envelope"></i>
                    <input name="email" type="email" placeholder="Insira seu Email" required>
                </div>

                <div class="input-box">
                    <i class="fa fa-lock"></i>
                    <input name="senha" type="password" placeholder="Insira sua Senha" required>
                </div>
                <div class="forgot"> <a href="#">Esqueceu a Senha?</a></div>
                <div class="input-box">
                    <input type="submit" value="Entrar" ><!--href="home.html"-->
                </div>
                <div class="divider"> ou </div>
                <!-- <div class="redes-sociais">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-whatsapp"></i>
                </div> -->
                <div class="sigu-text">
                    Não Tem uma Conta? <a href="cadastro.php">Crie uma Agora</a>
                </div>
            </form>
        </div>
        <!-- end login form -->
        <!-- login img -->
        <div class="login-img">
            <img src="Imagens/doces_julietta.png" width="100%">
        </div>
        <!-- end login img -->
    </div>
</body>
<script src="../js/jquery-3.5.1.slim.min.js" ></script>
<script src="../js/popper.min.js" ></script>
</html>