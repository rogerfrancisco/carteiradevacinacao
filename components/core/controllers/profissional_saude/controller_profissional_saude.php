<?php
    require_once("../../apoio/apoio.php");
    $token = !empty($_POST['token']) ? $_POST['token'] : null;
    $acao = !empty($_POST['acao']) ? $_POST['acao'] : null;

    if($token){
        apoio::conecta_token($token);
        switch($acao){
            case "inserir":
                controller_profissional_saude::inserir();
                break;
    
            case "selecionar_todos":
                controller_profissional_saude::selecionar_todos();
                break;
    
            case "selecionar_objeto":
                controller_profissional_saude::selecionar_objeto();
                break;
    
            case "deletar":
                controller_profissional_saude::deletar();
                break;
        }
    }


class controller_profissional_saude{
    public static function inserir(){
        require_once("acoes/inserir.php");
    }

    public static function selecionar_todos(){
        require_once("acoes/selecionar_todos.php");
    }

    public static function selecionar_objeto(){
        require_once("acoes/selecionar_objeto.php");
    }

    public static function deletar(){
        require_once("acoes/deletar.php");
    }
}