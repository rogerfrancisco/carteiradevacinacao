<?php
class usuario{
    private $id;
    private $user;
    private $senha;
    private $permissao;

    public function __construct($json)
    {
        $this->id = $json->id;
        $this->user = $json->user;
        $this->senha = $json->senha;
        $this->permissao = $json->permissao;
    }

    /**
     * Get the value of id
     */ 
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function get_user()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function set_user($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function get_senha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function set_senha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of permissao
     */ 
    public function get_permissao()
    {
        return $this->permissao;
    }

    /**
     * Set the value of permissao
     *
     * @return  self
     */ 
    public function set_permissao($permissao)
    {
        $this->permissao = $permissao;

        return $this;
    }
}