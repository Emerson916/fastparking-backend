<?php

namespace App\Core;

class Model {

    //vamos aplicar o padrão de projeto Singleton
    private static $conexao;


    public static function getConexao(){

        $host = $_ENV["database_host"];
        $user = $_ENV["database_user"];
        $password = $_ENV["database-pass"];

        //se a conexão não estiver criada, criamos ela
        if(!isset(self::$conexao)){
            self::$conexao = new \PDO("mysql:host=$host;port=3306;dbname=fastParking;", $user, $password);
        }
        
        //retornamos a conexão
        return self::$conexao;
    }

}