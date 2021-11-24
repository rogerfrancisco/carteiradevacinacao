<?php

class pessoa_nn_vacina{

    private $fk_pessoa;
    private $fk_vacina;
    private $fk_unidade;
    private $dose;
    private $datahora;

    function contrutor($json){
        $this->fk_pessoa = $json->fk_pessoa;
        $this->fk_vacina = $json->fk_vacina;
        $this->fk_unidade = $json->fk_unidade;
        $this->dose = $json->dose;
        $this->datahora = $json->datahora;
    }

    /**
     * Get the value of fk_pessoa
     */ 
    public function get_fk_pessoa()
    {
        return $this->fk_pessoa;
    }

    /**
     * Set the value of fk_pessoa
     *
     * @return  self
     */ 
    public function set_fk_pessoa($fk_pessoa)
    {
        $this->fk_pessoa = $fk_pessoa;

        return $this;
    }

    /**
     * Get the value of fk_vacina
     */ 
    public function get_fk_vacina()
    {
        return $this->fk_vacina;
    }

    /**
     * Set the value of fk_vacina
     *
     * @return  self
     */ 
    public function set_fk_vacina($fk_vacina)
    {
        $this->fk_vacina = $fk_vacina;

        return $this;
    }

    /**
     * Get the value of fk_unidade
     */ 
    public function get_fk_unidade()
    {
        return $this->fk_unidade;
    }

    /**
     * Set the value of fk_unidade
     *
     * @return  self
     */ 
    public function set_fk_unidade($fk_unidade)
    {
        $this->fk_unidade = $fk_unidade;

        return $this;
    }

    /**
     * Get the value of dose
     */ 
    public function get_dose()
    {
        return $this->dose;
    }

    /**
     * Set the value of dose
     *
     * @return  self
     */ 
    public function set_dose($dose)
    {
        $this->dose = $dose;

        return $this;
    }

    /**
     * Get the value of datahora
     */ 
    public function get_datahora()
    {
        return $this->datahora;
    }

    /**
     * Set the value of datahora
     *
     * @return  self
     */ 
    public function set_datahora($datahora)
    {
        $this->datahora = $datahora;

        return $this;
    }
}