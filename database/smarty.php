<?php

#ini_set('display_errors',1);
#error_reporting(E_ALL);


// load Smarty library
require('../libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setConfigDir('../configs/');
$smarty->setCacheDir('../cache/');
$smarty->assign('app_name', 'SETEC_Project');


?>
