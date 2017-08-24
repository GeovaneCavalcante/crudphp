<?php

class Connect{

    protected $connect;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "crudsimples";

    function __construct(){
        $this->connect = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function getConnection(){
        return $this->connect;
    }

    function testConnection(){
        if(!$this->connect){
            echo "Erro ao connectar";
        }else{
            echo "Banco conectado";
        }
    }
}
