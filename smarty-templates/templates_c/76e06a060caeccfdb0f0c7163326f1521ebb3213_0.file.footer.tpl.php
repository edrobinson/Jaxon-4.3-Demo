<?php
/* Smarty version 4.3.1, created on 2023-08-09 01:54:32
  from 'C:\wamp64\www\UnFramework\smarty-templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d2f1d8eb0937_17588467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e06a060caeccfdb0f0c7163326f1521ebb3213' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\footer.tpl',
      1 => 1685742603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d2f1d8eb0937_17588467 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
  This is a sample page footer for MyFramework.
-->  

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style=" color:black;">
    <div class="footer-legal"style="border-top: 2px solid black;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright text-center">
             Copyright © <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['footertext']->value;?>

            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mt-2">
              <a href="#">Cookies Policy |</a>
              <a href="#">Privacy Policy |</a>
              <a href="#">Terms of Use</a>
          </div>
        </div>
      </div>


        </div>

      </div>
    </div>
  </footer>
  
  <!-- Jquery and Bootstrap Javascripts -->
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>  
  
<?php }
}
