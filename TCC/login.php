<?php
session_start();
include_once("servidor.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"> -->


</head>

<body>
    <div class="container">
        <?php
        echo "<h2> bem vindo " . $_SESSION["login"]["user"] . "</h2>";
        ?>          

        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link" href="cadastro.php" target="link">pedidos</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="lista_livro.php" target="link">registrar produtos</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#">consultar usuários</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="home.html" tabindex="-1" >sair</a>
        </nav>
        <iframe  name="link" width="100%" height="1000px" frameborder="0" style="border: 0;">
    </div>
    </iframe>
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>