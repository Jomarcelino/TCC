<?php
session_start();
include("servidor.php");

// iremos pegar o dados preenchido no formulario

// $login = $_POST['login'];
// $senha = $_POST['senha'];

extract($_POST);

//echo $login . " " . $senha; 

$sql = " SELECT  * FROM tb_Cliente WHERE Cli_email = '".$email."' AND  Cli_senha ='".md5($senha)."'" ;
// $sql = " WHERE Cli_email = '".$login."' AND  Cli_senha ='".md5($senha)."'";

//echo $sql;

// procedural

// executar a string feita em php e converte em comando sql

//    $resultado  = mysqli_query($banco, $sql );
// saber o numero de linha retornado
//    echo mysqli_num_rows($resultado);

// ----------------------------------------------------------------------------------------

//P O O

   $resultado = $OOP->query($sql);

      $OOP->query($sql);
   //direcionar para a tela menu.php

   // if($OOP->num_rows == 1 ){
      if($resultado->num_rows == 1){

   // if(mysqli_num_rows($resultado) == 1){
    
    $campo = mysqli_fetch_array($resultado);
      
    $_SESSION["login"]["id"] = $campo["Cli_Codigo"];
    $_SESSION["login"]["user"] = $campo["Cli_Nome"];

    $OOP->close();
    
    header("location:adm.php");
   }else{
      header("location:login.php");
   }