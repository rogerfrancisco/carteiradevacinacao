<?php

include_once('../../dao/vacina/dao_vacina.php');

$objeto = $_POST['objeto'] ? json_decode($_POST['objeto']) : null;
$dao_vacina = new dao_vacina();
if($objeto){

    $retorno = false;
    $vacina = new vacina($objeto);
    if($vacina->get_id() == null){
        $retorno = $dao_vacina->inserir($vacina);
    }else{
        $retorno = $dao_vacina->editar($vacina);
    }

    echo json_encode($retorno);
}