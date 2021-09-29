<?php

include_once('../../dao/vacina/dao_vacina.php');

$dao_vacina = new dao_vacina();
$id = !empty($_POST['id']) ? $_POST['id'] : null;

$retorno = false;
if($id){
    $vacina = $dao_vacina->seleciona_objeto($id);
    if($vacina){
        $retorno = array(
            'id' => trim($vacina->get_id()),
            'lote' => trim($vacina->get_lote()),
            'descricao' => trim($vacina->get_descricao()),
            'validade' => trim($vacina->get_validade()),
            'fabricante' => trim($vacina->get_fabricante()),
            'dose' => trim($vacina->get_dose()),
            'quantidade' => trim($vacina->get_quantidade())
        );
    }
}

echo json_encode($retorno);