<?php

include_once("../carteiradevacinacao/components/core/db/conecta.php");

class dao_pagina{
    public $tabela = 'paginas';

    public function verifica_pagina($url){
        $sql = "SELECT * FROM $this->tabela WHERE descricao = :descricao";
        $sql = conecta::prepare($sql);
        $sql->bindParam(":descricao", $url);
        $sql->execute();
        return $sql->fetch();
    }
}