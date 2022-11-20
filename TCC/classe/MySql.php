<?php

class MySql{
    public static function conecta(){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=TCC", "root", "")
            return $pdo;
        }catch (Exception $e){
            echo "<h2>erro ao conectar</h2>";
        }
    }
}

?>