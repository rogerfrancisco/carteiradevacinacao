<?php

include_once('../../dao/unidade/dao_unidade.php');

$objeto = $_POST['objeto'] ? json_decode($_POST['objeto']) : null;
$dao_unidade = new dao_unidade();
if($objeto){

    $retorno = false;
    if($objeto->cnes){
        $unidade = new unidade($objeto);
        if(!$dao_unidade->seleciona_objeto($unidade->get_cnes())){
            $retorno = $dao_unidade->inserir($unidade);
        }else{
            $retorno = $dao_unidade->editar($unidade);
        }
    }

    echo json_encode($retorno);
}