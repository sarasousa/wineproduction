<?php /* Smarty version 3.1.27, created on 2016-02-04 12:34:22
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/data-pandlet-advanced.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:66601122356b3373e628184_72839829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b4bf529f35361809a89eeeb515ba5ea97704876' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/data-pandlet-advanced.tpl',
      1 => 1454585608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66601122356b3373e628184_72839829',
  'variables' => 
  array (
    'pandlet' => 0,
    'url1' => 0,
    'url2' => 0,
    'url3' => 0,
    'url4' => 0,
    'url5' => 0,
    'farm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b3373e7085f8_13377561',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b3373e7085f8_13377561')) {
function content_56b3373e7085f8_13377561 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '66601122356b3373e628184_72839829';
?>


 <?php echo '<script'; ?>
 src="../js/graphs/amcharts.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="../js/graphs/serial.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="../js/graphs/light.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="../js/graphs/dataloader.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 var1 = "<?php echo $_smarty_tpl->tpl_vars['pandlet']->value;?>
"src="<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url3']->value;?>
"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url4']->value;?>
"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url5']->value;?>
"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
                    <a class="navbar-brand navbar-left" href="#">Pandlet <?php echo $_smarty_tpl->tpl_vars['pandlet']->value;?>
 - Farm <?php echo $_smarty_tpl->tpl_vars['farm']->value;?>
 - Advanced Mode</a>
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
                     
    <button type="submit" class="btn-switch" onclick="window.location.href='../php/data-pandlet-simple.php?pandlet=<?php echo $_smarty_tpl->tpl_vars['pandlet']->value;?>
&farm=<?php echo $_smarty_tpl->tpl_vars['farm']->value;?>
'"><span>Switch to Simple Mode</span></button> 
                     
        <div class="content simple-mode">
            <div class="container-fluid">    
                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Temperature of the Air</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <input type="hidden" id="myPhpValue" value="<?php echo '<?php ';?>echo <?php echo $_smarty_tpl->tpl_vars['pandlet']->value;?>
 <?php echo '?>';?>" />
                                <div id="chartdiv1" style="width: 100%; height: 200px;"></div>
                                
                                
                                <div class="footer">
                                	<hr>
                                    <div class="stats">
                                        
                                    </div>                                
                                </div>
                            </div> <!-- content -->
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Temperature of the Soil</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv2" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Humidity of the Air</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv3" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Moisture of the Soil</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv4" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

                <div class="row">
                    <!--<div class="col-md-4">-->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Light Exposure</h4>
                            </div>
                            <div class="content"> 

                                <!-- Graph -->
                                <div id="chartdiv5" style="width: 100%; height: 200px;"></div>
                                
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>  <!-- /card-->
                    <!--</div>     -->          
                </div> <!-- /row -->

            </div> <!-- /container-fluid -->   
        </div> <!-- /content -->




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>