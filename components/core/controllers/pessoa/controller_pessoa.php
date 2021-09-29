<?php
    require_once("../../apoio/apoio.php");
    $token = !empty($_POST['token']) ? $_POST['token'] : null;
    $acao = !empty($_POST['acao']) ? $_POST['acao'] : null;

    if($token){
        apoio::conecta_token($token);
        switch($acao){
            case "inserir":
                controller_pessoa::inserir();
                break;
    
            case "selecionar_todos":
                controller_pessoa::selecionar_todos();
                break;
    
            case "selecionar_objeto":
                controller_pessoa::selecionar_objeto();
                break;
    
            case "deletar":
                controller_pessoa::deletar();
                break;
        }
    }else{
        echo("token inexistente!");
    }


class controller_pessoa{
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