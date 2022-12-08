<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="css/style-cad.css" /> 

</head>
<body>


<div class="container">
    <div class="cadForm">
        <Form action="cadastro.php" method="POST">
            <div class="form-box">
                <h2>Criar conta</h2>
                <p>Já tem uma conta? <a href="login.php">clique aqui</a> </p>
                
                <div class="input-box">
                    <!-- <label for="nome">Nome completo</label> -->
                    <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
                </div>

                <div class="input-box">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>

                <div class="input-box">
                    <!-- <label for="senha">Senha</label> -->
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>

                <div class="input-box">
                    <!-- <label for="confirmasenha">Confirmar senha</label> -->
                    <input type="password" name="confirmasenha" id="confirmasenha" placeholder="Confirmar senha" required>
                </div>

                <div class="input-box">
                    <!-- <label for="telefone">Nº Telefone</label> -->
                    <input type="text" name="telefone" id="telefone" placeholder="Telefone" required>
                </div>
                
                <div class="input-box">
                    <input type="submit" value="cadastrar" name="submit">
                </div>
            </div>
        </Form>
    </div>
        <div class="cad-img">
            <img src="imagens/doces_julietta.png" width="100%">
        </div>
</div>


<?php
include_once('servidor.php');

if(isset($_POST['submit'])){

$nome = $_POST['nome'];
$email = $_POST['email'];
//$senha = $_POST['senha']; $criptografia=md5($senha);
$senha = $_POST['senha'];

$telefone = $_POST['telefone'];

$sql = mysqli_query($banco, "INSERT INTO `tb_cliente`(
    `Cli_Email`, 
    `Cli_Senha`, 
    `Cli_Nome`,  
    `Cli_Numero`) 
    VALUES ('$email','$senha','$nome','$telefone')");
    // -- VALUES ('$email','$senha','$nome','$telefone')");

if (mysqli_affected_rows($banco)){
    echo "<script type='text/javascript'>
    alert('cadastro efetuado);
    </script>";
}

// $sql->execute(array($nome, $email, $senha, $telefone));
// echo "cadastro efetuado";

// if(!$sql){
//     echo 'erro de cadastro';
//     header('Location:cadastro.php');
// }else{
//     echo 'cadastro efetuado';
//     header('Location:login.php');
// }
}
//copiar cod projeto de cadproduto

?>
</body>
</html>