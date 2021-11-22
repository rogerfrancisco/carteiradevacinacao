<?php

include_once("../../db/conecta.php");
require_once("../../models/profissional_saude/profissional_saude.php");

class dao_profissional_saude{
    public $tabela = 'profissional_saude';

    public function seleciona_todos(){
        $sql = "SELECT * FROM $this->tabela";
        $sql = conecta::prepare($sql);
        $sql->execute();
        $sql = $sql->fetchAll();

        $retorno = array();
        if($sql){
            foreach($sql as $temp){
                array_push($retorno, new profissional_saude($temp));
            }
            return $retorno;
        }else{
            return false;
        }
    }

    public function seleciona_objeto($id){
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql->execute();

        $sql = $sql->fetch();
        return $sql ? new profissional_saude($sql) : false;
    }

    public function deletar($id){
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        return $sql->execute();
    }

    public function inserir($profissional_saude){
        $sql = "INSERT INTO $this->tabela(
                    formacao,
                    fk_pessoa,
                    fk_unidade)
                VALUES(
                    :formacao,
                    :fk_pessoa,
                    :fk_unidade)";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $profissional_saude);
        return $sql->execute();
    }

    public function editar($profissional_saude){
        $sql = "UPDATE $this->tabela SET
                    formacao = :formacao,
                    fk_pessoa = :fk_pessoa,
                    fk_unidade = :fk_unidade
                WHERE
                    id = :id";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $profissional_saude);
        return $sql->execute();
    }
    
    private function bind_all($sql, $profissional_saude){
        if($profissional_saude->get_id() != null){
            $sql->bindParam(":id", $profissional_saude->get_id(), PDO::PARAM_INT);
        }
        $sql->bindValue(":formacao", $profissional_saude->get_formacao(), PDO::PARAM_STR);
        $sql->bindValue(":fk_pessoa", $profissional_saude->get_fk_pessoa(), PDO::PARAM_STR);
        $sql->bindValue(":fk_unidade", $profissional_saude->get_fk_unidade(), PDO::PARAM_STR);

        return $sql;
    }
}