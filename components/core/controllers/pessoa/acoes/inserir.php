<?php

include_once('../../dao/pessoa/dao_pessoa.php');

$objeto = $_POST['objeto'] ? json_decode($_POST['objeto']) : null;
$dao_pessoa = new dao_pessoa();
if($objeto){

    $retorno = false;
    if($objeto->cpf && $objeto->nome){
        $pessoa = new pessoa($objeto);
        if(!$dao_pessoa->seleciona_objeto($pessoa->get_cpf())){
            $retorno = $dao_pessoa->inserir($pessoa);
        }else{
            $retorno = $dao_pessoa->editar($pessoa);
        }
    }

    echo json_encode($retorno);
}