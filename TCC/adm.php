<?php
session_start();
include('servidor.php');

if(!empty($_SESSION["login"]["id"]))
{

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main>
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <img src="./imagens/logo2s.png" width="113px" height="100px" />
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" target="link">Pedidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadDoce.php" target="link">Registrar produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="teladeusuario.php" target="link">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listaDoce.php" target="link">Lista de Doces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <h2>Bem vindo ademiro</h2>
    </main>
</body>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>

</html>

<?php }

else {

// Usuário não logado! Redireciona para a página de login
//header("Location: login.php");
//exit;


//docejuliettaadm@gmail.com
//djadmin2022

}