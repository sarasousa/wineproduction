<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);

set_include_path("../libs");

require_once('../database/smarty.php');
require_once('../database/session.php');
require_once('../database/base.php');


$url1 = "../js/graphs/script1.js";
$url2 = "../js/graphs/script2.js";
$url3 = "../js/graphs/script3.js";
$url4 = "../js/graphs/script4.js";
$url5 = "../js/graphs/script5.js";

$smarty->assign("url1", $url1);
$smarty->assign("url2", $url2);
$smarty->assign("url3", $url3);
$smarty->assign("url4", $url4);
$smarty->assign("url5", $url5);
$smarty->assign("pandlet", $_GET['pandlet']);
$smarty->assign("farm", $_GET['farm']);

$smarty->display('../templates/data-pandlet-advanced.tpl');




?>
