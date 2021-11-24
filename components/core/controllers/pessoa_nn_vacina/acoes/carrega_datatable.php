<?php

include_once('../../dao/dao_pessoa_nn_vacina_nn_vacina');
include_once('../../apoio/apoio.php');
$dao_pessoa_nn_vacina = new dao_pessoa_nn_vacina();

apoio::session_start();
$cpf = $_SESSION['id_usuario'];
$vacinas = $dao_pessoa_nn_vacina->selecionar_por_pessoa($cpf);

$retorno['data'] = array();
if($vacinas){
    foreach($vacinas as $vacina){
        $array_doses = array();
        $doses = $dao_pessoa_nn_vacina->doses_por_vacina($vacina->vacina);
        if($doses){
            foreach($doses as $dose){
                for($i = 1; $i <= 5; $i++){
                    if($dose->dose == $i){
                        array_push($array_doses, true);
                    }else{
                        array_push($array_doses, false);
                    }
                }
            }
        }
        array_push($retorno['data'], array(
            'descricao' => $vacina->descricao,
            'dose_1' => $array_doses[0] ? '<button class="btn btn-success" disabled> X </disabled>' : '<button class="btn btn-danger" disabled> X </disabled>',
            'dose_2' => $array_doses[1] ? '<button class="btn btn-success" disabled> X </disabled>' : '<button class="btn btn-danger" disabled> X </disabled>',
            'dose_3' => $array_doses[2] ? '<button class="btn btn-success" disabled> X </disabled>' : '<button class="btn btn-danger" disabled> X </disabled>',
            'dose_4' => $array_doses[3] ? '<button class="btn btn-success" disabled> X </disabled>' : '<button class="btn btn-danger" disabled> X </disabled>',
            'dose_5' => $array_doses[4] ? '<button class="btn btn-success" disabled> X </disabled>' : '<button class="btn btn-danger" disabled> X </disabled>',
        ));
    }
}

echo json_encode($retorno);