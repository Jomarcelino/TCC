<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-home.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        </style>
    <title>Doces Julietta</title>
</head>
<body>
    <main>    
        <header>
            <nav>
                <div class="logo"> <a href="index.php"> <img src="./imagens/logo2s.png" width="113px" height="100px"/></a></div>

                <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                </div>

                <ul class="nav-list">
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="produtos.php">PRODUTOS</a></li>
                    <li><a href="compra.php">COMPRAR</a></li>
                    <li><a href="contatos.html">CONTATOS</a></li>
                </ul>
            </nav>
        </header>
       
        <div class="carrosel">
            <div class="slides">
                  <input type="radio" name="radio" id="slide1" checked>
                  <input type="radio" name="radio" id="slide2">
                  <input type="radio" name="radio" id="slide3">
                  <input type="radio" name="radio" id="slide4">
                  <input type="radio" name="radio" id="slide5">
                
                <div class="slide f1">
                   <img src="./Imagens/poteplastico.jpg">
                </div>
                <div class="slide">
                     <img src="./Imagens/caixatradicional2.jpg">
                </div>
                <div class="slide">
                     <img src="./Imagens/caixagourmet.jpg">
                </div>
                <div class="slide">
                    <img src="./Imagens/bcaixatradicional2.jpg">
                </div>
                <div class="slide">
                    <img src="./Imagens/caixagourmet4.jpg">         
                </div>
            </div>

            <div class="navigation">
                 <label class="barra" for="slide1"></label>
                 <label class="barra" for="slide2"></label>
                 <label class="barra" for="slide3"></label>
                 <label class="barra" for="slide4"></label>
                 <label class="barra" for="slide5"></label>
            </div>
        </div>
       <!--fim do carrosel-->

             <!--começo do card tradicional-->
        
             <div class="CardTradicional">

            <!--Primero card-->
            <div class="card">
                <div class="img">
                     <img src="./Imagens/bcaixatradicional.jpg"  width="100px" height="100px">         
                </div>
                <b>Tradicional</b>
                <b>R$1,89 por brigadeiro</b>
            </div>

            <!--Segundo card-->
            <div class="card">
                <div class="img">
                     <img src="./Imagens/caixatradicional.jpg" width="100px" height="100px">         
                </div>
                <b>Tradicional</b>
                <b>R$1,89 por brigadeiro</b>
            </div>

            <!--Terceiro card-->
            <div class="card">
                <div class="img">
                     <img src="./Imagens/bcaixatradicional2.jpg" width="100px" height="100px">         
                </div>
                <b>Tradicional</b>
                <b>R$1,89 por brigadeiro</b>
            </div>

            <!--Quarto card-->
            <div class="card">
                <div class="img">
                     <img src="./Imagens/caixatradicional2.jpg"  width="100px" height="100px">         
                </div>
                <b>Tradicional</b>
                <b>R$1,89 por brigadeiro</b>
            </div>

            <!--Quinto card-->
            <div class="card">
                <div class="img">
                     <img src="./Imagens/caixatradicional3.jpg"  width="100px" height="100px">         
                </div>
                <b>Tradicional</b>
                <b>R$1,89 por brigadeiro</b>
            </div>
        </div>
        <!--fim do card tradicional-->

        <!--começo do card gourmet-->
        <div class="CardGourmet">

            <!--Primero card-->
            <div class="cardG">
                <div class="imgG">
                     <img src="./Imagens/poteplastico2.jpg"  width="100px" height="100px">         
                </div>
                <b>Gourmet</b>
                <b>R$2,39 por brigadeiro</b>
            </div>

            <!--Segundo card-->
            <div class="cardG">
                <div class="imgG">
                     <img src="./Imagens/potecaixinha2.jpg" width="100px" height="100px">         
                </div>
                <b>Gourmet</b>
                <b>R$2,39 por brigadeiro</b>
            </div>

            <!--Terceiro card-->
            <div class="cardG">
                <div class="imgG">
                     <img src="./Imagens/barquinho.jpg" width="100px" height="100px">         
                </div>
                <b>Gourmet</b>
                <b>R$2,39 por brigadeiro</b>
            </div>

            <!--Quarto card-->
            <div class="cardG">
                <div class="imgG">
                     <img src="./Imagens/poteplastico4.jpg"  width="100px" height="100px">         
                </div>
                <b>Gourmet</b>
                <b>R$2,39 por brigadeiro</b>
            </div>

            <!--Quinto card-->
            <div class="cardG">
                <div class="imgG">
                     <img src="./Imagens/caixagourmet5.jpg"  width="100px" height="100px">         
                </div>
                <b>Gourmet</b>
                <b>R$2,39 por brigadeiro</b>
            </div>
        </div>
        <!--fim do card gourmet--> 
        <script src="js/mobile-navbar.js"></script>
    </main>
</body>
</html>