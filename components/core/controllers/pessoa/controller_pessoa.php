<?php
    require_once("../../apoio/apoio.php");
    $token = !empty($_POST['token']) ? $_POST['token'] : 'bXlzcWx8fHVzLWNkYnItZWFzdC0wNC5jbGVhcmRiLmNvbXx8IHx8YmRlYjZjMzA0NDAwZTJ8fGFkZWIwZTQyfHxoZXJva3VfNzM4MDQ0NDM2Zjg3OGFk';
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

            case "carrega_datatable":
                controller_pessoa::carrega_datatable();
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

    public static function carrega_datatable(){
        require_once("acoes/carrega_datatable.php");
    }
}