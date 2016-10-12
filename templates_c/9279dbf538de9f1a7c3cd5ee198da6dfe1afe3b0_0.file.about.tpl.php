<?php /* Smarty version 3.1.27, created on 2016-01-23 20:13:21
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:134105918056a3d0d1113d74_68432836%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9279dbf538de9f1a7c3cd5ee198da6dfe1afe3b0' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/about.tpl',
      1 => 1453576398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134105918056a3d0d1113d74_68432836',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a3d0d1197594_08243527',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a3d0d1197594_08243527')) {
function content_56a3d0d1197594_08243527 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134105918056a3d0d1113d74_68432836';
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
                    <a class="navbar-brand navbar-left" href="#">About</a>
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
             <h4 class="about">This Project was developed by the Group B students of the Engineering Systems - Telecommunications, Electronics and Computers course.</h4>
              <div class="row">
                <div class="col-md-4" >
                </div>
                 <div class="col-md-4" >
                      <h5 class="group-name gr">Team Leader</h5> 
                      <div class="group">
                        <p>Carlos Sousa</p>
                      </div>
                  </div>
                <div class="col-md-4" >
                </div>
                </div>
                <div class="row">
                 <div class="col-md-4" >
                       <h5 class="group-name">Android Group</h5> 
                        <div class="group">
                          <p>António Miguel Sousa</p>
                          <p>Bruno Pereira</p>
                          <p>Hugo Fonseca</p> 
                          <p>Pedro Vilhena</p> 
                        </div>
                 </div>
                  <div class="col-md-4" >
                       <h5 class="group-name">Documentation Group</h5> 
                        <div class="group">
                          <p>Carlos Sousa</p>
                          <p>Inês Teixeira</p> 
                          <p>Ulisses Rodrigues</p>
                        </div>
                 </div>
                 <div class="col-md-4" >
                        <h5 class="group-name">Firmware Group</h5> 
                        <div class="group">
                          <p>José Sá</p>
                          <p>Pierre Bresson</p>
                          <p>Vânia Vieira</p>
                        </div>
                 </div>
                </div>
                 <div class="row"> 
                 <div class="col-md-4" >
                        <h5 class="group-name">Hardware Group</h5>
                        <div class="group"> 
                          <p>Christian Caldeira</p>
                          <p>Hugo Santos</p>
                          <p>João Teixeira</p> 
                          <p>Jorge Neves</p> 
                        </div>
                 </div>
                 <div class="col-md-4" >
                      <h5 class="group-name">Protocol Group</h5> 
                      <div class="group">
                        <p>João Meira</p>
                        <p>John Cebola</p>
                        <p>Manuel Brandão</p>
                      </div>
                 </div>
                 <div class="col-md-4" >
                       <h5 class="group-name gr">Web Group</h5> 
                        <div class="group">
                          <p>Diogo Martins</p>
                          <p>Flávio Silva</p>
                          <p>Inês Teixeira</p> 
                          <p>Sara Sousa</p> 
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