<?php

namespace App;


    class Conexao{

        static $host = 'localhost';
        static $user = 'root';
        static $pass = 'root';
        static $dbname = 'gercon';

        static function getConexao(){

            try {

                return new PDO('mysql:
                host='.self::$host.';
                dbname='.self::$dbname.'',
                ''.self::$user.'',
                ''.self::$pass.'');
                
    } catch (PDOException $e) {
        echo "Falha na comunicaçao com o BD. </br>" .$e->getCode() . ' mensagem> ' . $e->getMessage();
    }


        }



    }





?>