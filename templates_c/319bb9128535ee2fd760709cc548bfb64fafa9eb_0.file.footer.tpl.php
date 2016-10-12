<?php /* Smarty version 3.1.27, created on 2016-01-15 04:08:03
         compiled from "/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110785954856986293984049_43573586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319bb9128535ee2fd760709cc548bfb64fafa9eb' => 
    array (
      0 => '/usr/users2/mieec2012/ee12001/public_html/SETEC/templates/footer.tpl',
      1 => 1452827279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110785954856986293984049_43573586',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56986293a056e4_24354645',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56986293a056e4_24354645')) {
function content_56986293a056e4_24354645 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110785954856986293984049_43573586';
?>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   <ul>
                        <li>
                            <a href="../php/about.php">
                                About
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2015 <a href="https://sigarra.up.pt/feup/pt/ucurr_geral.ficha_uc_view?pv_ocorrencia_id=365678">SETEC Project</a>
                </p>
            </div>
        </footer>
        
    </div>   <!-- sidebar -->
</div>      <!-- wrapper-->


</body>

    <!--   Core JS Files   -->
    <?php echo '<script'; ?>
 src="../js/jquery-1.10.2.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	
	<!--  Checkbox, Radio & Switch Plugins -->
	<?php echo '<script'; ?>
 src="js/bootstrap-checkbox-radio-switch.js"><?php echo '</script'; ?>
>
	
	<!--  Charts Plugin -->
	<?php echo '<script'; ?>
 src="../js/chartist.min.js"><?php echo '</script'; ?>
>

    <!--  Notifications Plugin    -->
    <?php echo '<script'; ?>
 src="../js/bootstrap-notify.js"><?php echo '</script'; ?>
>
	
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<?php echo '<script'; ?>
 src="../js/light-bootstrap-dashboard.js"><?php echo '</script'; ?>
>
	

</html>

<?php }
}
?>