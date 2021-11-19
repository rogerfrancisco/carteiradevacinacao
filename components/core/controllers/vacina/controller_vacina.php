<?php
    require_once("../../apoio/apoio.php");
    $token = !empty($_POST['token']) ? $_POST['token'] : 'bXlzcWx8fHVzLWNkYnItZWFzdC0wNC5jbGVhcmRiLmNvbXx8IHx8YmRlYjZjMzA0NDAwZTJ8fGFkZWIwZTQyfHxoZXJva3VfNzM4MDQ0NDM2Zjg3OGFk';
    $acao = !empty($_POST['acao']) ? $_POST['acao'] : null;

    if($token){
        apoio::conecta_token($token);
        switch($acao){
            case "inserir":
                controller_vacina::inserir();
                break;
    
            case "selecionar_todos":
                controller_vacina::selecionar_todos();
                break;
    
            case "selecionar_objeto":
                controller_vacina::selecionar_objeto();
                break;
    
            case "deletar":
                controller_vacina::deletar();
                break;
    
            case "carrega_datatable":
                controller_vacina::carrega_datatable();
                break;
        }
    }


class controller_vacina{
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