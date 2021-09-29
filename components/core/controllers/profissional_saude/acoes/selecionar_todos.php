<?php

include_once('../../dao/profissional_saude/dao_profissional_saude.php');

$dao_profissional_saude = new dao_profissional_saude();

$profissionais_saude = $dao_profissional_saude->seleciona_todos();

$retorno = array();
if($profissionais_saude){
    foreach($profissionais_saude as $profissional_saude){
        array_push($retorno, array(
            'id' => trim($profissional_saude->get_id()),
            'formacao' => trim($profissional_saude->get_formacao()),
            'fk_pessoa' => trim($profissional_saude->get_fk_pessoa()),
            'fk_unidade' => trim($profissional_saude->get_fk_unidade())
        ));
    }
}

echo json_encode($retorno);