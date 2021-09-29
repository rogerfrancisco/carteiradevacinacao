<?php

include_once('../../dao/unidade/dao_unidade.php');

$dao_unidade = new dao_unidade();
$cnes = !empty($_POST['cnes']) ? $_POST['cnes'] : null;

echo json_encode($cnes ? $dao_unidade->deletar($cnes) : false);