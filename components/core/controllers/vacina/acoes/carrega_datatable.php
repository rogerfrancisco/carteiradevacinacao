<?php

include_once('../../dao/vacina/dao_vacina.php');
$dao_vacina = new dao_vacina();

$vacinas = $dao_vacina->seleciona_todos();

$retorno['data'] = array();
if($vacinas){
    foreach($vacinas as $vacina){
        $data = explode('-', $vacina->get_validade());
        array_push($retorno['data'], array(
            'id' => $vacina->get_id(),
            'lote' => $vacina->get_lote(),
            'descricao' => $vacina->get_descricao(),
            'validade' => $data[2] . "/" . $data[1] . "/" . $data[0],
            'fabricante' => $vacina->get_fabricante(),
            'dose' => $vacina->get_dose(),
            'quantidade' => $vacina->get_quantidade(),
            'editar' => '<a href="cadastro_vacina.php?id=' . $vacina->get_id() . '">Editar</a>'
        ));
    }
}

echo json_encode($retorno);