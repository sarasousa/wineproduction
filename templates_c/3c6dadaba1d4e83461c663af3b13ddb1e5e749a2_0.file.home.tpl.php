<?php /* Smarty version 3.1.27, created on 2016-02-04 12:33:31
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:174911345256b3370bb37db3_19142047%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6dadaba1d4e83461c663af3b13ddb1e5e749a2' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/home.tpl',
      1 => 1454585592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174911345256b3370bb37db3_19142047',
  'variables' => 
  array (
    'red' => 0,
    'yellow' => 0,
    'rpan' => 0,
    'pid' => 0,
    'ypan' => 0,
    'time' => 0,
    'tmp' => 0,
    'tmpsoil' => 0,
    'mst' => 0,
    'mstsoil' => 0,
    'lgt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b3370bc57ca4_37125606',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b3370bc57ca4_37125606')) {
function content_56b3370bc57ca4_37125606 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '174911345256b3370bb37db3_19142047';
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
        <a class="navbar-brand navbar-left" href="#">Home</a>
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
            <h4 class="title">Warnings</h4>
            <p class="category">Pandlets' State</p>
          </div>
          <div class="content">
            <?php if ($_smarty_tpl->tpl_vars['red']->value > 0 || $_smarty_tpl->tpl_vars['yellow']->value > 0) {?>
            <img id="warn-img" alt="warning_logo" height="85" width="90" src="../img/warning.png" />

            <p><?php echo $_smarty_tpl->tpl_vars['red']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['red']->value == 1) {?> pandlet is<?php } else { ?> pandlets are<?php }?> in a <span id="red">red</span> state. (Pandlet: <?php
$_from = $_smarty_tpl->tpl_vars['rpan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pid']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
$foreach_pid_Sav = $_smarty_tpl->tpl_vars['pid'];
?> <?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
; <?php
$_smarty_tpl->tpl_vars['pid'] = $foreach_pid_Sav;
}
?>)</p>
            
            <p><?php echo $_smarty_tpl->tpl_vars['yellow']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['yellow']->value == 1) {?> pandlet is<?php } else { ?> pandlets are<?php }?> in a <span id="yellow">yellow</span> state. (Pandlet: <?php
$_from = $_smarty_tpl->tpl_vars['ypan']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pid']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pid']->value) {
$_smarty_tpl->tpl_vars['pid']->_loop = true;
$foreach_pid_Sav = $_smarty_tpl->tpl_vars['pid'];
?> <?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
; <?php
$_smarty_tpl->tpl_vars['pid'] = $foreach_pid_Sav;
}
?>)</p>
            

            <?php } else { ?>

            <p>Everything seems <span id="green">ok!</span></p>
            <?php }?>
            <div class="footer">
              <a class="btn" id="vm-btn" name="button" href="../php/warnings.php">View More</a>
              <hr>
              <div class="stats">
                <i class="fa fa-clock-o"></i> Updated <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 ago
              </div>
            </div>
          </div>
        </div>
        <!--</div>     -->
      </div>



      <div class="row" id="vn-state">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Today's Vineyard State</h4>
              <p class="category">News</p>
            </div>
            <div class="content">
              <h5>Temperature (Air): </h5>
              <p><?php echo $_smarty_tpl->tpl_vars['tmp']->value;?>
ºC</p>
              <h5>Temperature (Soil): </h5>
              <p><?php echo $_smarty_tpl->tpl_vars['tmpsoil']->value;?>
ºC</p>
              <h5>Humidity (Air): </h5>
              <p><?php echo $_smarty_tpl->tpl_vars['mst']->value;?>
%</p>
              <h5>Moisture (Soil): </h5>
              <p><?php echo $_smarty_tpl->tpl_vars['mstsoil']->value;?>
%</p>
              <h5>Light Exposure: </h5>
              <p><?php echo $_smarty_tpl->tpl_vars['lgt']->value;?>
lx</p>
              <div class="footer">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
 ago
                </div>
              </div>
            </div>
          </div>
        </div>




        <!--<div class="col-md-6">
          <div class="card ">
            <div class="header">
              <h4 class="title">Tasks</h4>
            </div>
            <div class="content">
              <div class="table-responsive table-full-width">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <label class="checkbox">
                          <input type="checkbox" value="" data-toggle="checkbox">
                        </label>
                      </td>
                      <td>Task1?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="checkbox">
                          <input type="checkbox" value="" data-toggle="checkbox" checked="">
                        </label>
                      </td>
                      <td>Task2?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="checkbox">
                          <input type="checkbox" value="" data-toggle="checkbox" checked="">
                        </label>
                      </td>
                      <td>Task3?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                          <i class="fa fa-times"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="footer">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>


  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>