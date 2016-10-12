<?php /* Smarty version 3.1.27, created on 2016-02-04 07:37:10
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:190485002456b2f1965a2e38_26923244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40de04779255a0806783ad4dff6847134d601c1d' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/menu.tpl',
      1 => 1454567826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190485002456b2f1965a2e38_26923244',
  'variables' => 
  array (
    's_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b2f196606333_36942362',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b2f196606333_36942362')) {
function content_56b2f196606333_36942362 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190485002456b2f1965a2e38_26923244';
?>
 <div class="sidebar" data-color="purple" data-image="../img/sidebar-5.jpg">
	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    SETEC Project
                </a>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['s_email']->value) {?>
            <ul class="nav active">
                <li>
                    <a href="../php/home.php">
                        <i class="pe-7s-graph"></i> 
                        <p>Home</p>
                    </a>            
                </li>
                <li>
                    <a href="../php/warnings.php">
                        <i class="pe-7s-bell"></i> 
                        <p>Warnings</p>
                    </a>        
                </li>
                <li>
                    <a href="../php/map.php">
                        <i class="pe-7s-map-marker"></i> 
                        <p>View Data</p>
                    </a>        
                </li>
                <!--
                <li>
                    <a href="../php/data-simple.php">
                        <i class="pe-7s-map-marker"></i> 
                        <p>View Data</p>
                    </a>        
                </li>
                <li>
                    <a href="../php/data-advanced.php">
                        <i class="pe-7s-map-marker"></i> 
                        <p>View Charts</p>
                    </a>        
                </li>-->
                <li>
                    <a href="../php/information.php">
                        <i class="pe-7s-science"></i> 
                        <p>Information</p>
                    </a>        
                </li>
            </ul> 
            <?php }?>
    	</div>
    </div><?php }
}
?>