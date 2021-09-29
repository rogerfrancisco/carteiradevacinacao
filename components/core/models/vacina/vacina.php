<?php

class vacina{
    private $id;
    private $lote;
    private $descricao;
    private $validade;
    private $fabricante;
    private $dose;
    private $quantidade;

    function __construct($json){
        $this->id = $json->id;
        $this->lote = $json->lote;
        $this->descricao = $json->descricao;
        $this->validade = $json->validade;
        $this->fabricante = $json->fabricante;
        $this->dose = $json->dose;
        $this->quantidade = $json->quantidade;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_lote()
    {
        return $this->lote;
    }

    public function set_lote($lote)
    {
        $this->lote = $lote;
    }

    public function get_descricao()
    {
        return $this->descricao;
    }

    public function set_descricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function get_validade()
    {
        return $this->validade;
    }

    public function set_validade($validade)
    {
        $this->validade = $validade;
    }

    public function get_fabricante()
    {
        return $this->fabricante;
    }

    public function set_fabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    public function get_dose()
    {
        return $this->dose;
    }

    public function set_dose($dose)
    {
        $this->dose = $dose;
    }

    public function get_quantidade()
    {
        return $this->quantidade;
    }

    public function set_quantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
}