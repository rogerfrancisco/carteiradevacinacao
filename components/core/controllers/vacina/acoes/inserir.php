<?php

include_once('../../dao/vacina/dao_vacina.php');

$objeto = $_POST['objeto'] ? json_decode($_POST['objeto']) : null;
$dao_vacina = new dao_vacina();
if($objeto){

    $retorno = false;
    $vacina = new vacina($objeto);
    $data = explode('/', $vacina->get_validade());
    $vacina->set_validade($data[2] . "-" . $data[1] . "-" . $data[0]);
    if($vacina->get_id()){
        $retorno = $dao_vacina->inserir($vacina);
    }else{
        $retorno = $dao_vacina->editar($vacina);
    }

    echo json_encode($retorno);
}