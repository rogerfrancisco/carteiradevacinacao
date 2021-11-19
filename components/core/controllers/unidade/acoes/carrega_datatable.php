<?php

include_once('../../dao/unidade/dao_unidade.php');
$dao_unidade = new dao_unidade();

$unidades = $dao_unidade->seleciona_todos();

$retorno['data'] = array();
if($unidades){
    foreach($unidades as $unidade){
        array_push($retorno['data'], array(
            'cnes' => $unidade->get_cnes(),
            'descricao' => $unidade->get_descricao(),
            'endereco' => $unidade->get_endereco(),
            'editar' => '<a href="cadastro_unidade.php?id=' . $unidade->get_cnes() . '">Editar</a>'
        ));
    }
}

echo json_encode($retorno);