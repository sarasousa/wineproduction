<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);

set_include_path("../libs");

require_once('../database/smarty.php');
require_once('../database/session.php');

if ($s_email)
{
	 header("Location: home.php");
	 die;
}


$smarty->display('../templates/index.tpl');

?>
