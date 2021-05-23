<?php

    class DB{

    public static function conectar(){
        
        try{
            $pdo=new PDO('mysql:host=localhost;dbname=base-datos;charset=utf8','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(exception $e){
            die($e->getMessage());

        }

    }
    
}

?>



