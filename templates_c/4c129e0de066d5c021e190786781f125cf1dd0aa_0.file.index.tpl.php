<?php /* Smarty version 3.1.27, created on 2016-01-21 02:02:51
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:96126733356a02e3b138f07_48538351%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c129e0de066d5c021e190786781f125cf1dd0aa' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/index.tpl',
      1 => 1453338168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96126733356a02e3b138f07_48538351',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a02e3b1d5b16_65195753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a02e3b1d5b16_65195753')) {
function content_56a02e3b1d5b16_65195753 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '96126733356a02e3b138f07_48538351';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo '<script'; ?>
>


function closewarning(){
    $('#login').show();
    $('#warn').hide();
    }


$(document).ready(function() {
    $('#btn1').click(function(e) {
        var isValid = true;
        $('input').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;

                $("#pastes").html('<div id="warn"><button type="button" onclick="closewarning()" class="close" data-dismiss="alert">×</button><div class="alert alert-info"><strong>Warning!</strong> Empty input</div></div>' );

                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
            }
            else {

                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });

        if (isValid == false) 
            e.preventDefault();
        else 
        {
            $("#pastes").html('');
           // alert('Thank you for submitting');
        }
    });


});

<?php echo '</script'; ?>
>
    
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

                                <img alt="Grape_logo" height="75" width="60" src="../img/preto.png" />

                                <h1>SETEC Project!</h1>
                                 <div id="pastes">

                                </div>

                                <form action="../php/login_action.php" id="loginform" method="post">

                                <input class="form-control" id="username" name="username" placeholder="E-mail" type="text" />

                                <input class="form-control" id="password" name="password" placeholder="Password" type="password" />

                                <button class="btnn btn-2 btn-2g" name="button" id="btn1" type="submit" >Sign in</button>
                                </form>
                                
                            </div>
                        </div>
                      


                                            
                </div>                    
            </div>
        </div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>