<?php
session_start();
include_once("servidor.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="container">
        <section class="col-md-2">
            
        </section>
        <section class="col-md-8">
            <h3 class="mt-5">Lista de Usuários</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">DELETAR</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql = " SELECT Cli_Codigo, Cli_Email, Cli_Nome, Cli_Numero FROM tb_cliente ";
                // EXECUTAR
                $resp =  mysqli_query($banco, $sql);

                while( $tabela =  mysqli_fetch_array($resp) ){
                echo "<tr>
                        <th scope='row'>".$tabela["Cli_Codigo"]."</th>
                        <td>".$tabela["Cli_Nome"]."</td>
                        <td>".$tabela["Cli_Email"]."</td>
                        <td>".number_format($tabela["Cli_Numero"], 2, " ",".")."</td> 
                        <td>
                            <a href='ProcDelDoce.php?Cli_Codigo=".$tabela["Cli_Codigo"]."'> 
                            <img src='imagens/caixote-de-lixo.png' width='32' title='Deletar'></a>
                        </td>  
                        </tr>";
                }

                   ?>
                    
                </tbody>
            </table>


           
        </section>
        <section class="col-md-2"></section>

        <a href="adm.php">
            <button class="botao">
             <br>Voltar</br>
            </button>
        </a>

    </div>

</body>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>

</html>