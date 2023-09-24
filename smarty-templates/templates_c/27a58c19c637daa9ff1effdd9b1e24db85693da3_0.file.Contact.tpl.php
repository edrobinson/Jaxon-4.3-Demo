<?php
/* Smarty version 4.3.1, created on 2023-08-09 01:54:32
  from 'C:\wamp64\www\UnFramework\smarty-templates\Contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d2f1d8ce7dd3_84200806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27a58c19c637daa9ff1effdd9b1e24db85693da3' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\Contact.tpl',
      1 => 1686108049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagehead.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64d2f1d8ce7dd3_84200806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:pagehead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <!---->
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <!---->

  <main id="main">
    <!-- Content Here -->
    <section id="contact" class="contact " style="margin-top: 7%; margin-bottom: 11%;">
      <div class="container">

        <div class="row">
          <div class="col-lg-12  mb-2">
            <h1 class="page-title">Contact Me</h1>
          </div>
        </div>


        <div class="form ">
          <form id="form1" action="https://www.sharla-dawn.com/contact-server.php">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="website" id="website" placeholder="Website URL">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="text-center mt-3"><button type="button" onclick="submitForm()">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>  
    <!-- Content Ends -->
  </main>
  <?php echo '<script'; ?>
 src="assets/js/contact.js"><?php echo '</script'; ?>
>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <!---->
 
  <?php echo '<script'; ?>
 src="assets/js/contact.js"><?php echo '</script'; ?>
>

  <!-- Jaxon PHP Framework Code Tags -->
  <?php echo $_smarty_tpl->tpl_vars['jaxonjs']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['jaxonscript']->value;?>


</body>
</html><?php }
}
