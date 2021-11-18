<?php

include_once("../../db/conecta.php");
require_once("../../models/usuario/usuario.php");

class dao_usuario{
    public $tabela = 'usuario';

    public function carrega_todos(){
        $sql = "SELECT * FROM $this->tabela";
        $sql = conecta::prepare($sql);
        $sql->execute();
        $sql = $sql->fetchAll();

        $retorno = array();
        if($sql){
            foreach($sql as $temp){
                array_push($retorno, new usuario($temp));
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

        return $sql ? new usuario($sql) : false;
    }

    public function inserir($usuario){
        $sql = "INSERT INTO $this->tabela(
                    user,
                    senha,
                    permissao)
                VALUES(
                    :user,
                    :senha,
                    :permissao)";
        $sql = conecta::prepare($sql);
        $sql->bindValue(":user", $usuario->get_user(), PDO::PARAM_STR);
        $sql->bindValue(":senha", $usuario->get_senha(), PDO::PARAM_STR);
        $sql->bindValue(":permissao", $usuario->get_permissao(), PDO::PARAM_INT);
        return $sql->execute();
    }

    public function editar($usuario){
        $sql = "UPDATE $this->tabela
                SET
                    user = :user,
                    senha = :senha,
                    permissao = :permissao
                WHERE
                    id = :id";
        $sql = conecta::prepare($sql);
        $sql = $this->bind_all($sql, $usuario);
        return $sql->execute();
    }

    public function verica_login($user, $senha){
        $sql = "SELECT * FROM $this->tabela WHERE user = :user AND senha = :senha";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":user", $user, PDO::PARAM_STR);
        $sql->bindParam(":senha", $senha, PDO::PARAM_STR);
        $sql->execute();
        $sql = $sql->fetch();

        if($sql){
            return new usuario($sql);
        }else{
            false;
        }
    }

    private function bind_all($sql, $usuario){
        $sql->bindValue(":id", $usuario->get_id(), PDO::PARAM_INT);
        $sql->bindValue(":user", $usuario->get_user(), PDO::PARAM_STR);
        $sql->bindValue(":senha", $usuario->get_senha(), PDO::PARAM_STR);
        $sql->bindValue(":permissao", $usuario->get_permissao(), PDO::PARAM_INT);
        return $sql;
    }
}