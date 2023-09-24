<?php
/* Smarty version 4.3.1, created on 2023-08-29 04:36:37
  from 'C:\wamp64\www\UnFramework\smarty-templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ed75d5625320_78831296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd59d0a29cd82b8a83562f7f9eeb673aa0311617' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\login.tpl',
      1 => 1693274825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ed75d5625320_78831296 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section id="contact" class="contact " style="margin-top: 7%; margin-bottom: 11%;">
      <div class="container">

        <div class="mx-auto row align-items-center">
          <div class="col"></div>
          <div class="col">
              <form id="form1">
                <div class="form-group  mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
                
                <div class="form-group ">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password">
                </div>
                <div class="text-center mt-3"><button type="button" onclick="submitForm()">Login</button></div>
              </form>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </section>  
  <?php echo '<script'; ?>
 src="assets/js/contact.js"><?php echo '</script'; ?>
>
<?php }
}
