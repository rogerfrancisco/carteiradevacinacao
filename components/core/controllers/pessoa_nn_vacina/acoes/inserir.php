<?php

include_once('../../dao/dao_pessoa_nn_vacina.php');

$objeto = $_POST['objeto'] ? json_decode($_POST['objeto']) : null;
$dao_pessoa_nn_vacina = new dao_pessoa_nn_vacina();

$retorno = false;
if($objeto){
    if(!$dao_pessoa_nn_vacina->valida_vacinado($objeto->cpf, $objeto->vacina, $objeto->dose)){
        $pessoa_nn_vacina = new pessoa_nn_vacina();
        $pessoa_nn_vacina->set_fk_pessoa($objeto->cpf);
        $pessoa_nn_vacina->set_fk_vacina($objeto->vacina);
        $pessoa_nn_vacina->set_fk_unidade($objeto->unidade);
        $pessoa_nn_vacina->set_dose($objeto->dose);
        $pessoa_nn_vacina->set_datahora(date('Y-m-d h:i:s'));

        $retorno = $dao_pessoa_nn_vacina->inserir($pessoa_nn_vacina);
    }
}
echo json_encode($retorno);