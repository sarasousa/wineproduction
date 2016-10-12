<?php /* Smarty version 3.1.27, created on 2016-01-14 20:08:36
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/data-advanced.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18657426255697f234e72b07_80671250%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924fa900663927d5b945d97d5fd5006758108e67' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/data-advanced.tpl',
      1 => 1452713605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18657426255697f234e72b07_80671250',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5697f23500f739_52216942',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5697f23500f739_52216942')) {
function content_5697f23500f739_52216942 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18657426255697f234e72b07_80671250';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-left" href="#">View Data - Choose a Pandlet</a>
                </div>
               <div class="collapse navbar-collapse"> 
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../php/logout_action.php">
                                Log out
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <ul>
                <li><a href="../php/data-pandlet-advanced.php?pandlet=1">Pandlet 1</a></li>
                <li><a href="../php/data-pandlet-advanced.php?pandlet=2">Pandlet 2</a></li>
                <li><a href="../php/data-pandlet-advanced.php?pandlet=3">Pandlet 3</a></li>
                </ul> 
            </div>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>