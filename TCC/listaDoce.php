<?php
session_start();
include_once("servidor.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de doces</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="container">
        <section class="col-md-2">
            
        </section>
        <section class="col-md-8">
            <a href="adm.php"><br>voltar</br> </a>
            <h3 class="mt-5">Lista de doces</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Editar / DELETAR</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql = " SELECT Doc_Codigo, Doc_Nome, Doc_Preco FROM tb_doces ";
                // EXECUTAR
                $resp =  mysqli_query($banco, $sql);

                while( $tabela =  mysqli_fetch_array($resp) ){
                echo "<tr>
                        <th scope='row'>".$tabela["Doc_Codigo"]."</th>
                        <td>".$tabela["Doc_Nome"]."</td>
                        <td>R$  ".number_format($tabela["Doc_Preco"], 2, ",",".")."</td> 
                        <td>
                            <a href='altDoce2.php?Doc_Codigo=".$tabela["Doc_Codigo"]."'> 
                                <img src='imagens/botao-editar.png' width='32' title='Editar'></a> |
                            
                                <a href='ProcDelDoce.php?Doc_Codigo=".$tabela["Doc_Codigo"]."'> 
                            <img src='imagens/caixote-de-lixo.png' width='32' title='Deletar'></a>
                        </td>  
                        </tr>";
                }

                   ?>
                    
                </tbody>
            </table>
        </section>
        <section class="col-md-2"></section>
    </div>

</body>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>

</html>