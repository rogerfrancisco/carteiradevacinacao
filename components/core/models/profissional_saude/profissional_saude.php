<?php
class profissional_saude{
    private $id;
    private $formacao;
    private $fk_pessoa;
    private $fk_unidade;

    function __construct($json){
        $this->id = $json->id;
        $this->formacao = $json->formacao;
        $this->fk_pessoa = $json->fk_pessoa;
        $this->fk_unidade = $json->fk_unidade;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;    
    }

    public function get_formacao()
    {
        return $this->formacao;
    }

    public function set_formacao($formacao)
    {
        $this->formacao = $formacao;    
    }

    public function get_fk_pessoa()
    {
        return $this->fk_pessoa;
    }

    public function set_fk_pessoa($fk_pessoa)
    {
        $this->fk_pessoa = $fk_pessoa;    
    }

    public function get_fk_unidade()
    {
        return $this->fk_unidade;
    }

    public function set_fk_unidade($fk_unidade)
    {
        $this->fk_unidade = $fk_unidade;
    }
}