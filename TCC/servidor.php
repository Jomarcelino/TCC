<?php
//Iremos fazer a conexão com o banco de dados nas formas:
    // coonstante
    define('servidor','localhost');
    define('usuario','root');
    define('senha','');
    define('banco','doce_julietta');
    define('porta','3306');   
    
    // procedural
       //função  para fazer a conexão ao banco com os parametros  
     $banco = mysqli_connect( servidor, usuario, senha, banco, porta);

        // verificar se ha conexão com o servidor caso haja mostra uma mensagem

        // mysqli_connect_erro() - monstra um mensagem (string ) sobre o motivo de conexão
        // mysqli_connect_errno() - monstra um codigo ao inves de string de erro;

       if(!$banco){
           die( "Falha na conexão, motivo : " . mysqli_connect_erro());
       } 
       else{
           echo "conexão efetuada"; 
       }
    // Orientação Objeto

    //criar uma instancia

    $OOP = new mysqli(servidor, usuario, senha, banco, porta);

    if($OOP->connect_errno){

        die("Falha" . $OOP->connect_errno);
    }else{
            //echo"conectou";
    }

    // PDO
?>