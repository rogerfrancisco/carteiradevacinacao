<?php

include_once("../../db/conecta.php");
require_once("../../models/pessoa/pessoa.php");

class dao_pessoa{
    public $tabela = "pessoa";

    function inserir($pessoa){
        $sql = "INSERT INTO $this->tabela
                (
                    cpf,
                    nome,
                    nome_mae,
                    cartao_sus,
                    endereco,
                    telefone_1,
                    telefone_2
                )
                VALUES(
                    :cpf,
                    :nome,
                    :nome_mae,
                    :cartao_sus,
                    :endereco,
                    :telefone_1,
                    :telefone_2
                )";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $pessoa);

        return $sql->execute();
    }

    public function seleciona_objeto($cpf){
        $sql = "SELECT * FROM $this->tabela WHERE cpf = :cpf";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $sql->execute();
        $sql = $sql->fetch();

        return $sql ? new pessoa($sql) : false;
    }

    public function seleciona_todos(){
        $sql = "SELECT * FROM $this->tabela";
        $sql = conecta::prepare($sql);
        $sql->execute();
        $sql = $sql->fetchAll();

        $retorno = array();
        if($sql){
            foreach($sql as $temp){
                $pessoa = new pessoa($temp);
                array_push($retorno, $pessoa);
            }
            return $retorno;
        }else{
            return false;
        }
    }

    public function deletar($cpf){
        $sql = "DELETE FROM $this->tabela WHERE cpf = :cpf";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":cpf", $cpf, PDO::PARAM_STR);

        return $sql->execute();
    }

    public function editar($pessoa){
        $sql = "UPDATE 
                    $this->tabela
                SET
                    nome = :nome,
                    nome_mae = :nome_mae,
                    cartao_sus = :cartao_sus,
                    endereco = :endereco,
                    telefone_1 = :telefone_1,
                    telefone_2 = :telefone_2
                WHERE
                    cpf = :cpf";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $pessoa);

        return $sql->execute();
    }

    private function bind_all($sql, $pessoa){
        $sql->bindParam(":cpf", $pessoa->get_cpf(), PDO::PARAM_STR);
        $sql->bindParam(":nome", $pessoa->get_nome(), PDO::PARAM_STR);
        $sql->bindParam(":nome_mae", $pessoa->get_nome_mae(), PDO::PARAM_STR);
        $sql->bindParam(":cartao_sus", $pessoa->get_cartao_sus(), PDO::PARAM_STR);
        $sql->bindParam(":endereco", $pessoa->get_endereco(), PDO::PARAM_STR);
        $sql->bindParam(":telefone_1", $pessoa->get_telefone_1(), PDO::PARAM_STR);
        $sql->bindParam(":telefone_2", $pessoa->get_telefone_2(), PDO::PARAM_STR);
        return $sql;
    }
}