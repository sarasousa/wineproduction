<?php /* Smarty version 3.1.27, created on 2016-02-04 07:41:03
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/warnings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:157031660756b2f27fa142d7_80750664%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7644c9dc9e886e9f71b3f3e15e971aafe4d1f6a9' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/warnings.tpl',
      1 => 1454568059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157031660756b2f27fa142d7_80750664',
  'variables' => 
  array (
    'esc' => 0,
    'rad' => 0,
    'alarm' => 0,
    'gead' => 0,
    'alarms' => 0,
    'new1' => 0,
    'mildtemp' => 0,
    'mildmois' => 0,
    'oitemp' => 0,
    'oimois' => 0,
    'esca' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b2f27fb6bf92_10349411',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b2f27fb6bf92_10349411')) {
function content_56b2f27fb6bf92_10349411 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '157031660756b2f27fa142d7_80750664';
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
        <a class="navbar-brand navbar-left" href="#">Warning</a>
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
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Scalding</h4>
           
          </div>
          <div class="content">

            <table>
                
            <?php
$_from = $_smarty_tpl->tpl_vars['esc']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['new1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['new1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['new1']->value) {
$_smarty_tpl->tpl_vars['new1']->_loop = true;
$foreach_new1_Sav = $_smarty_tpl->tpl_vars['new1'];
?>
                <tr>
                     <?php echo '<?php
                   
                    ';?>$curYear=date('Y');
                    $curMonth=date('m'); //'M' gives name of month

                     $dates =$new1['dates'];
                     $values =$new1['value'];

                    list ($year, $month, $day) = explode('-',$dates);
         
                    if($year!=$curYear)
                        { $alarms = NULL; 
                        }
                      $inutil=  intval($values);
                      $val = 45;
                    if($val<$inutil)
                        {
                        $rad = NULL;
                        }
                    <?php echo '?>';?>
                    
             
                   
                </tr>
            <?php
$_smarty_tpl->tpl_vars['new1'] = $foreach_new1_Sav;
}
?>
            
            <p> <?php if ($_smarty_tpl->tpl_vars['rad']->value != NULL) {?><img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" /> <?php } else { ?> <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" /> <?php }?> </p>
                

           
            <p>  <?php if (($_smarty_tpl->tpl_vars['esc']->value != NULL) && ($_smarty_tpl->tpl_vars['alarm']->value != NULL)) {?> Warning: Scald. The temperature exceeded 36ºC.<?php } else { ?> No danger.<?php }?>  </p>
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
        <!--</div>     -->
      
 
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Frost</h4>
           
          </div>
          <div class="content">
            
            <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
            
            <table>
                
            <?php
$_from = $_smarty_tpl->tpl_vars['gead']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['new1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['new1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['new1']->value) {
$_smarty_tpl->tpl_vars['new1']->_loop = true;
$foreach_new1_Sav = $_smarty_tpl->tpl_vars['new1'];
?>
                <tr>
                     <?php echo '<?php 
                   
                    ';?>$curYear=date('Y');
                    $curMonth=date('m'); //'M' gives name of month

                     $dates =$gead['dates'];

                    list ($year, $month, $day) = explode('-',$dates);
         
                    if($year!=$curYear)
                        { $alarms = NULL; 
                        }
                    if($month=="11"||$month=="12"||$month=="01"||$month=="02")
                        {
                        $alarms = NULL;
                        }
                    <?php echo '?>';?>  
                    
                    <!--<p> <?php if (($_smarty_tpl->tpl_vars['alarms']->value != NULL)) {?>Estiveram <?php echo $_smarty_tpl->tpl_vars['new1']->value['value'];?>
 ºC, às <?php echo $_smarty_tpl->tpl_vars['new1']->value['times'];?>
 de dia <?php echo $_smarty_tpl->tpl_vars['new1']->value['dates'];?>
.<?php } else { ?> <?php }?> </p>-->
                    
                </tr>
            <?php
$_smarty_tpl->tpl_vars['new1'] = $foreach_new1_Sav;
}
?>
            <p> <?php if (($_smarty_tpl->tpl_vars['gead']->value != NULL) && ($_smarty_tpl->tpl_vars['alarms']->value != NULL)) {?> Ice or frost in a critical time of the year.<?php } else { ?> No danger.<?php }?>   </p>
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
   
      
            
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Mildew</h4>
           
          </div>
          <div class="content">
            
         
            
            <table>
                
            <?php if ((($_smarty_tpl->tpl_vars['mildtemp']->value != 0) && ($_smarty_tpl->tpl_vars['mildmois']->value != 0))) {?>
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Danger. </p>
                <?php } else { ?>
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            <?php }?>
            
            
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            
          </div>
        </div>
        <!--</div>     -->
      </div>
            
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Oidium</h4>
           
          </div>
          <div class="content">
            
           
            
            <table>
                
            <?php if ((($_smarty_tpl->tpl_vars['oitemp']->value != 0) && ($_smarty_tpl->tpl_vars['oimois']->value != 0))) {?>
               <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Danger. </p>
                <?php } else { ?>
               <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            <?php }?>
            
            </table>
            
            <div class="footer">
                <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
     
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Rottenness</h4>
           
          </div>
          <div class="content">
            
            
            
            <table>
                
            <?php if ((($_smarty_tpl->tpl_vars['mildtemp']->value != 0) && ($_smarty_tpl->tpl_vars['mildmois']->value != 0))) {?>
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Danger. </p>
                <?php } else { ?>
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            <?php }?>
            </table>
            
            <div class="footer">
               <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>
      
            
            
             <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-md-4">-->
        <div class="card">
          <div class="header">
            <h4 class="title">Esca</h4>
           
          </div>
          <div class="content">
            
        
            <table>
            <?php if (($_smarty_tpl->tpl_vars['esca']->value == 1)) {?>
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warningred.png" />
                <p> Warning: Notice the weather. Very hot temperatures after raining creates the perfect environment for Esca. </p>
                <?php } else { ?>
                <img id="warn-img" alt="warning_logo" height="105" src="../img/warning.png" />
                <p> No danger.</p>
            <?php }?>
           
            </table>
            
            <div class="footer">
               <p> More about diseases at <a href="../php/information.php">Information</a> page</p>
           
             
            </div>
          </div>
        </div>

            


            
            
            
            
  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>