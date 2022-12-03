<?php
   include_once('servidor.php');

   if(isset($_POST['update'])){
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
    $arq = $_POST['imagem'];

    $sql="UPDATE tb_doces SET Doc_Nome='$nome', Doc_Preco='$valor', Doc_Descricao='$desc', Doc_Img='$arq' WHERE Doc_Codigo='$id'";

    $result = $banco->query($sql);
   }
   header('Location:altDoce.php');
?>