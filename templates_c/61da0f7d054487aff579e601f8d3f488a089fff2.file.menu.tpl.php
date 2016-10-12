<?php /* Smarty version Smarty-3.1.5, created on 2015-10-30 03:12:55
         compiled from "../templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4631746465632d227c37cb8-86722356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61da0f7d054487aff579e601f8d3f488a089fff2' => 
    array (
      0 => '../templates/menu.tpl',
      1 => 1446168474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4631746465632d227c37cb8-86722356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5632d227c6375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5632d227c6375')) {function content_5632d227c6375($_smarty_tpl) {?> <div class="sidebar" data-color="purple" data-image="img/sidebar-5.jpg">
	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    SETEC Project
                </a>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['s_email']->value){?>
            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i> 
                        <p>Home</p>
                    </a>            
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-user"></i> 
                        <p>Warnings</p>
                    </a>
                </li> 
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i> 
                        <p>Maps</p>
                    </a>        
                </li>
                <li class="active">
                    <a href="info.html">
                        <i class="pe-7s-science"></i> 
                        <p>Information</p>
                    </a>        
                </li>
            </ul> 
            <?php }?>
    	</div>
    </div><?php }} ?>