<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);

set_include_path("../libs");

require_once('../database/smarty.php');
require_once('../database/session.php');
require_once('../database/base.php');
require_once('../database/Pandlet.php');

$pandlet = $_GET['pandlet'];
$farm = $_GET['farm'];
$smarty->assign("pandlet", $_GET['pandlet']);
$smarty->assign("farm", $_GET['farm']);


$result = Pandlet::getMeasureTable($pandlet, $farm);

?>
<script>

	var data = <? echo json_encode($result); ?> ;

</script>

<?


$smarty->display('../templates/data-simple.tpl');



?>
