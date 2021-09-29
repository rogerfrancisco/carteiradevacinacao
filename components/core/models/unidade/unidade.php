<?php

class unidade{
    private $cnes;
    private $descricao;
    private $endereco;

    public function __construct($json){
        $this->cnes = $json->cnes;
        $this->descricao = $json->descricao;
        $this->endereco = $json->endereco;
    }

    public function get_cnes()
    {
        return $this->cnes;
    }

    public function set_cnes($cnes)
    {
        $this->cnes = $cnes;
    }

    public function get_descricao()
    {
        return $this->descricao;
    }

    public function set_descricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function get_endereco()
    {
        return $this->endereco;
    }

    public function set_endereco($endereco)
    {
        $this->endereco = $endereco;
    }
}