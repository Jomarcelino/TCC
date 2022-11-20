<?php
session_start();

include('servidor.php');

// variavel post
$nome = $_POST["nome"];
$desc = $_POST["desc"];
$valor = $_POST["valor"];
// echo $ed = $_POST["ed"];

$imagem = $_FILES["arq"];

//1º colocar o caminho da imagen no banco
$dir = "imagens/" .$imagem["name"];

//2º os dados do banco
    $sql = "INSERT INTO tb_doces( 
                        Doc_Nome, 
                        Doc_descricao,
                        Doc_Img, 
                        Doc_Preco)
                        VALUES('$nome','$desc','$imagem','$valor')";
    //EXECUTAR

    $resp = mysqli_query($banco , $sql);

    //saber se algo foi executado no banco()
    if (mysqli_affected_rows($resp)){
        echo "<script type='text/javascript'>
        alert('cadastro efetuado);
        </script>";
    }