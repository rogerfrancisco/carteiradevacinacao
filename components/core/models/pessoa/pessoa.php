<?php

class pessoa{
    private $cpf;
    private $nome;
    private $nome_mae;
    private $cartao_sus;
    private $endereco;
    private $telefone_1;
    private $telefone_2;

    public function __construct($json){
        $this->cpf = $json->cpf;
        $this->nome = $json->nome;
        $this->nome_mae = $json->nome_mae;
        $this->cartao_sus = $json->cartao_sus;
        $this->endereco = $json->endereco;
        $this->telefone_1 = $json->telefone_1;
        $this->telefone_2 = $json->telefone_2;
    }

    public function get_cpf()
    {
        return $this->cpf;
    }

    public function set_cpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_nome_mae()
    {
        return $this->nome_mae;
    }

    public function set_nome_mae($nome_mae)
    {
        $this->nome_mae = $nome_mae;
    }

    public function get_cartao_sus()
    {
        return $this->cartao_sus;
    }

    public function set_cartao_sus($cartao_sus)
    {
        $this->cartao_sus = $cartao_sus;
    }

    public function get_endereco()
    {
        return $this->endereco;
    }

    public function set_endereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function get_telefone_1()
    {
        return $this->telefone_1;
    }

    public function set_telefone_1($telefone_1)
    {
        $this->telefone_1 = $telefone_1;
    }

    public function get_telefone_2()
    {
        return $this->telefone_2;
    }

    public function set_telefone_2($telefone_2)
    {
        $this->telefone_2 = $telefone_2;
    }
}