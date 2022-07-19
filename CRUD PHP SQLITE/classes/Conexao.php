<?php

class Conexao {

    private $usuario;
    private $senha;
    private $bancoDeDados;
    private $host;
    private $arquivo;

    public function __construct() {
        $this->usuario = 'root';
        $this->senha = '';
        $this->bancoDeDados = 'senai';
        $this->host = 'localhost';
        $this->arquivo = 'banco_de_dados/senai.db';
    }

    public function getConexao($bd = 'mysql') {

        if ($bd == 'mysql') {
            return $this->getConexaoMySQL();
        }else {
            return $this->getconexaoSqlite();
        }

    }

    private function getConexaoMySQL() {

        $con = new \PDO('mysql:host='.$this->host.';dbname='.$this->bancoDeDados, $this->usuario, $this->senha);
        return $con;

    }

    private function getconexaoSqlite() {

        $con = new \PDO('sqlite:'.$this->arquivo);
        return $con;

    }

}