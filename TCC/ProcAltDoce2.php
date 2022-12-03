<?php
include("servidor.php");

session_start();

extract($_POST);

$imagem = $_FILES["arq"];

$dir = "/Imagens/" . $imagem["name"];

$sqlAltProduto = " UPDATE tb_doces SET Doc_Nome = '$nome',  Doc_Preco = '$valor', Doc_descricao = '$desc', Doc_Img = '$dir' WHERE Doc_Codigo = '$id'";

// Executar

$resp = mysqli_query($banco, $sqlAltProduto);

//$resp = $OOP->query($sql);

// Saber se algo foi executado(linha) no banco
mysqli_affected_rows($banco);

if (mysqli_affected_rows($banco)) {
    echo "<script type='text/javascript'>
    alert('Doce alterado com sucesso!');
    </script>";

// 3º mover a imagem para pasta

    move_uploaded_file($imagem["tmp_name"], $dir);

    //echo "RXRXRX";
    header("location:listaDoce.php");
}
