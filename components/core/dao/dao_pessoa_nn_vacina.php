<?php

include_once("../db/conecta.php");
require_once("../models/pessoa_nn_vacina.php");

class dao_pessoa_nn_vacina{
    public $tabela = "pessoa_nn_vacina";

    function inserir($pessoa_nn_vacina){
        $sql = "INSERT INTO $this->tabela(
                    fk_pessoa,
                    fk_vacina,
                    fk_unidade,
                    dose,
                    datahora)
                VALUES(
                    :fk_pessoa,
                    :fk_vacina,
                    :fk_unidade,
                    :dose,
                    :datahora)";
        $sql = conecta::prepare($sql);
        $sql->bindValue(":fk_pessoa", $pessoa_nn_vacina->get_fk_pessoa(), PDO::PARAM_STR);
        $sql->bindValue(":fk_vacina", $pessoa_nn_vacina->get_fk_vacina(), PDO::PARAM_INT);
        $sql->bindValue(":fk_unidade", $pessoa_nn_vacina->get_fk_unidade(), PDO::PARAM_STR);
        $sql->bindValue(":dose", $pessoa_nn_vacina->get_dose(), PDO::PARAM_INT);
        $sql->bindValue(":datahora", $pessoa_nn_vacina->get_datahora(), PDO::PARAM_STR);
        return $sql->execute();
    }

    function valida_vacinado($fk_pessoa, $fk_vacina, $dose){
        $sql = "SELECT COUNT(fk_pessoa) as total FROM $this->tabela 
                WHERE fk_pessoa = :fk_pessoa AND fk_vacina = :fk_vacina AND dose = :dose";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":fk_pessoa", $fk_pessoa);
        $sql->bindParam(":fk_vacina", $fk_vacina);
        $sql->bindParam(":dose", $dose);
        $sql->execute();
        
        return intval($sql->fetch()->total) > 0 ? true : false;
    }

    function selecionar_por_pessoa($fk_pessoa){
        $sql = "SELECT 
                    a.fk_vacina as vacina,
                    b.descricao as descricao
                FROM 
                    $this->tabela a
                LEFT JOIN 
                    vacina b ON b.id = a.fk_vacina
                WHERE 
                    a.fk_pessoa = :fk_pessoa";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":fk_pessoa", $fk_pessoa);
        $sql->execute();
        
        $sql = $sql->fetchAll();

        $retorno = array();
        if($sql){
            foreach($sql as $temp){
                array_push($retorno, $temp);
            }
            return $retorno;
        }else{
            return false;
        }
    }

    function doses_por_vacina($fk_vacina){
        $sql = "SELECT dose FROM $this->tabela WHERE fk_vacina = :fk_vacina";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":fk_vacina", $fk_vacina);
        $sql->execute();
        $sql = $sql->fetchAll();

        $retorno = array();
        if($sql){
            foreach($sql as $temp){
                array_push($retorno, $temp);
            }
            return $retorno;
        }else{
            return false;
        }
    }
}