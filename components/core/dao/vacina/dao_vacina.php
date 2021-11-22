<?php

include_once("../../db/conecta.php");
require_once("../../models/vacina/vacina.php");

class dao_vacina{
    public $tabela = "vacina";

    public function seleciona_objeto($id){
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql->execute();
        $sql = $sql->fetch();
        return $sql ? new vacina($sql) : false;
    }

    public function seleciona_todos(){
        $sql = "SELECT * FROM $this->tabela";
        $sql = conecta::prepare($sql);
        $sql->execute();
        $sql = $sql->fetchAll();

        if($sql){
            $retorno = array();
            foreach($sql as $temp){
                array_push($retorno, new vacina($temp));
            }
            return $retorno;
        }else{
            return false;
        }
    }

    public function inserir($vacina){
        $sql = "INSERT INTO $this->tabela(
                    lote,
                    descricao,
                    validade,
                    fabricante,
                    dose,
                    quantidade)
                VALUES(
                    :lote,
                    :descricao,
                    :validade,
                    :fabricante,
                    :dose,
                    :quantidade)";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $vacina);
        return $sql->execute();
    }

    public function editar($vacina){
        $sql = "UPDATE 
                    $this->tabela
                SET
                    lote = :lote,
                    descricao = :descricao,
                    validade = :validade,
                    fabricante = :fabricante,
                    dose = :dose,
                    quantidade = :quantidade
                WHERE
                    id = :id";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $vacina);
        return $sql->execute();
    }

    public function deletar($id){
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":id", $id, PDO::PARAM_INT);

        return $sql->execute();
    }

    private function bind_all($sql, $vacina){
        if($vacina->get_id() != null){
            $sql->bindValue(":id", $vacina->get_id(), PDO::PARAM_INT);
        }
        $sql->bindValue(":lote", $vacina->get_lote(), PDO::PARAM_STR);
        $sql->bindValue(":descricao", $vacina->get_descricao(), PDO::PARAM_STR);
        $sql->bindValue(":validade", $vacina->get_validade(), PDO::PARAM_STR);
        $sql->bindValue(":fabricante", $vacina->get_fabricante(), PDO::PARAM_STR);
        $sql->bindValue(":dose", $vacina->get_dose(), PDO::PARAM_STR);
        $sql->bindValue(":quantidade", $vacina->get_quantidade(), PDO::PARAM_INT);

        return $sql;
    }
}