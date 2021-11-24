<?php

include_once('../../dao/pessoa/dao_pessoa.php');
include_once('../../dao/profissional_saude/dao_profissional_saude.php');

$dao_pessoa = new dao_pessoa();
$dao_profissional_saude = new dao_profissional_saude();
$cpf = !empty($_POST['cpf']) ? $_POST['cpf'] : null;

$retorno = false;
if($cpf){
    $pessoa = $dao_pessoa->seleciona_objeto($cpf);
    $profissional = $dao_profissional_saude->seleciona_objeto_por_pessoa($cpf);
    if($pessoa){
        $retorno = array(
            'cpf' => trim($pessoa->get_cpf()),
            'nome' => trim($pessoa->get_nome()),
            'nome_mae' => trim($pessoa->get_nome_mae()),
            'cartao_sus' => trim($pessoa->get_cartao_sus()),
            'endereco' => trim($pessoa->get_endereco()),
            'telefone_1' => trim($pessoa->get_telefone_1()),
            'telefone_2' => trim($pessoa->get_telefone_2()),
            'formacao' => $profissional ? $profissional->get_formacao() : null,
            'unidade' => $profissional ? $profissional->get_fk_unidade() : null
        );
    }
}

echo json_encode($retorno);