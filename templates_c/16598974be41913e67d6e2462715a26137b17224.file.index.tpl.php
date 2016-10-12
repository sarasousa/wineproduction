<?php /* Smarty version Smarty-3.1.5, created on 2015-10-30 03:15:07
         compiled from "../templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14888278235632d227b2a8e4-70709551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16598974be41913e67d6e2462715a26137b17224' => 
    array (
      0 => '../templates/index.tpl',
      1 => 1446171301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14888278235632d227b2a8e4-70709551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5632d227bc7b6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5632d227bc7b6')) {function content_5632d227bc7b6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
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
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">       
    
                    

                </div>
            </div>
        </nav>
                     
                     
        <div class="content">
            <div class="container-fluid" id="body">
                <div class="row">                   
   


                        <div class="col-md-12">
                            <div class="login">

                                <img alt="Grape_logo" height="75" width="60" src="img/preto.png"/>

                                <h1>SETEC Project!<h1>

                                <form action="../php/login.php" method="post">

                                <input class="form-control" id="username" name="username" placeholder="Username" type="text" />

                                <input class="form-control" id="password" name="password" placeholder="Password" type="password" />
                                <input class="form-control" id="upassmd5" name="upassmd5" value="" type="hidden" />

                                <!--<button class="btn btn-lg btn-primary btn-block" name="button" type="submit" href="#">Sign in</button>-->
                                <button class="btnn btn-2 btn-2g" name="button" type="submit">Sign in</button>
                                </form>
                                
                            </div>
                        </div>
                      


                                            
                </div>                    
            </div>
        </div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>