<?php 
$path = !empty($_SERVER['DOCUMENT_ROOT']) ? $_SERVER['DOCUMENT_ROOT'] : dirname(dirname(__FILE__));
require_once($path . '/carteira_digital/components/templates/header.php'); ?>



<?php require_once($path . '/carteira_digital/components/templates/footer.php'); ?>