<?php
session_start();

include("./servidor.php");

// iremos pegar o dados preenchido no formulario

extract($_POST);

// $email = $_POST['email'];
// $senha = $_POST['senha'];

//echo $login . " " . $senha; 

$sql = " select  * from tb_cliente " ;
$sql .= " where Cli_Email = '".$email."' and  Cli_Senha ='".$senha."'";

// echo $sql;

// executar a string feita em php e converte em comando sql

$resultado  = mysqli_query($banco, $sql );

//$resultado  = $OOP->query( $sql );

// saber o numero de linha retornado
echo mysqli_num_rows($resultado);

   //echo $resultado->num_rows;

 if(mysqli_num_rows($resultado) == 1){

   //if($resultado->num_rows == 1){

      //ler o registro do banco de dados
   $campo = mysqli_fetch_array($resultado); // tabela do banco

   //$campo = $resultado->fetch_array(); // tabela do banco

   if($campo["Cli_Codigo"] == 1){ // Se campo do banco de dados Cli_Codigo for igual a id 4 então faça
      

      $_SESSION["login"]["id"] = $campo["Cli_Codigo"];
      $_SESSION["login"]["user"] = $campo["Cli_Nome"];

      header("Location:adm.php");
   }
   else{
      echo "errrrrroooooouuu";
   }
   }else{
      //direcionar para tela login.php
      unset($_SESSION["login"]);
      header("location:index.php");
      echo "<script type='text/javascript'>
            alert('Login efetuado);
            </script>";
   }