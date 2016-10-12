<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);

set_include_path("../libs");

require_once('../database/smarty.php');
require_once('../database/session.php');

$smarty->display('../templates/information.tpl');

?>
