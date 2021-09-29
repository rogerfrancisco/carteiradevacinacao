<?php

include_once("../../db/conecta.php");
require_once("../../models/unidade/unidade.php");

class dao_unidade{
    public $tabela = 'unidade';

    public function seleciona_todos(){
        $sql = "SELECT * FROM $this->tabela";
        $sql = conecta::prepare($sql);
        $sql->execute();
        $sql = $sql->fetchAll();

        $retorno = array();
        if($sql){
            foreach($sql as $temp){
                array_push($retorno, new unidade($temp));
            }
            return $retorno;
        }else{
            return false;
        }
    }

    public function seleciona_objeto($cnes){
        $sql = "SELECT * FROM $this->tabela WHERE cnes = :cnes";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":cnes", $cnes, PDO::PARAM_INT);
        $sql->execute();
        $sql = $sql->fetch();

        return $sql ? new unidade($sql) : false;
    }

    public function inserir($unidade){
        $sql = "INSERT INTO $this->tabela(
                    cnes,
                    descricao,
                    endereco)
                VALUES(
                    :cnes,
                    :descricao,
                    :endereco)";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $unidade);
        return $sql->execute();
    }

    public function editar($unidade){
        $sql = "UPDATE $this->tabela
                SET
                    descricao = :descricao,
                    endereco = :endereco
                WHERE
                    cnes = :cnes";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $unidade);
        return $sql->execute();
    }

    public function deletar($cnes){
        $sql = "DELETE FROM $this->tabela WHERE cnes = :cnes";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":cnes", $cnes, PDO::PARAM_STR);
        return $sql->execute();
    }

    private function bind_all($sql, $unidade){
        $sql->bindParam(":cnes", $unidade->get_cnes(), PDO::PARAM_STR);
        $sql->bindParam(":descricao", $unidade->get_descricao(), PDO::PARAM_STR);
        $sql->bindParam(":endereco", $unidade->get_endereco(), PDO::PARAM_STR);
        return $sql;
    }
}