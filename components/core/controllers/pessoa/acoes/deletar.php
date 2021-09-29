<?php

include_once('../../dao/pessoa/dao_pessoa.php');

$dao_pessoa = new dao_pessoa();
$cpf = !empty($_POST['cpf']) ? $_POST['cpf'] : null;

echo json_encode($cpf ? $dao_pessoa->deletar($cpf) : false);