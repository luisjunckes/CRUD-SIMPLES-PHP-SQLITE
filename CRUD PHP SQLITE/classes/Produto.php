<?php

require 'Conexao.php';

class Produto {

    private $conexao;

    public function __construct() {

        $con = new Conexao();
        $this->conexao = $con->getConexao('sqlite');
    }

    public function listar() {

        $sql = 'select * from produto;';
        $q = $this->conexao->prepare($sql);
        $q->execute();

        return $q;

    }

    public function CodProd($codigo) {

        $sql = 'select * from produto where codigo = ?';
        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codigo);

        $q->execute();

        return $q;
    }

    public function ProdDesc($descricao) {

        $sql = 'select * from produto where descricao like ?';
        $q = $this->conexao->prepare($sql);

        $v = '%'.$descricao.'%';

        $q->bindParam(1, $v);

        $q->execute();

        return $q;

    }

    public function AdicionaProd($nome, $descricao, $valor) {

        $sql = 'insert into produto (nome, descricao, valor) values (?, ?, ?)';
        $q = $this->conexao->prepare($sql);

        $q->bindParam(1,$nome);
        $q->bindParam(2,$descricao);
        $q->bindParam(3,$valor);

        $q->execute();

        return $q;

    }

    public function DeletarProd($codigo) {

        $sql = 'delete from produto where codigo = ?';
        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codigo);

        $q->execute();

        return $q;
    }

    public function EditaProd($nome, $descricao, $valor, $codigo) {

        $sql = 'update produto set nome = ?, descricao = ?, valor = ? where codigo = ?';
        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        $q->bindParam(2, $descricao);
        $q->bindParam(3, $valor);
        $q->bindParam(4, $codigo);

        $q->execute();

        return $q;
    }
}