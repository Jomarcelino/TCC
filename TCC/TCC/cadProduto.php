<?php
session_start();

include('servidor.php');

$nome = $_FILES['arq']['name'];
$diretorio = 'C:\xampp\htdocs\TCC\TCC\Imagens';
$destino = "$diretorio/$nome";

$tmp_name = $_FILES['arq']['name'];
move_uploaded_file($tmp_name, $destino);

// variavel post
$nome = $_POST['nome'];
$desc = $_POST['desc'];
$valor = $_POST['valor'];

// echo $ed = $_POST["ed"];

$imagem = $_FILES['arq']['tmp_name'];

//1º colocar o caminho da imagen no banco
//$dir = "imagens/" .$imagem["name"];

//2º os dados do banco
    $sql = "INSERT INTO tb_doces(Doc_Nome, Doc_descricao, Doc_Img, Doc_Preco)
            VALUES('$nome','$desc','$destino','$valor')";
    //EXECUTAR

    $resp = mysqli_query($banco , $sql);

    //saber se algo foi executado no banco()
    if (mysqli_affected_rows($banco)){
        echo "<script type='text/javascript'>
        alert('cadastro efetuado');
        window.location.href='cadDoce.php';
        </script>";
    }