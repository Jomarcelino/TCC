<?php
session_start();
include_once('servior.php');
if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $desc = $_POST['desc'];
        $dir = $_POST['dir'];
        $valor = $_POST['valor'];
        
        $sqlInsert = "UPDATE tb_doces 
        SET Doc_Nome='$nome',Doc_Descricao='$desc',Doc_Img='$dir',Doc_Preco='$valor'
        WHERE Doc_Codigo=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: listaDoce.php');

?>