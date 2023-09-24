<?php
/* Smarty version 4.3.1, created on 2023-09-24 18:33:57
  from 'C:\wamp64\www\UnFramework-43\smarty-templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651081154035d4_26331881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31191eabcae78ef8f503485035d53a28bd60b4c' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework-43\\smarty-templates\\contact.tpl',
      1 => 1691546157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651081154035d4_26331881 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section id="contact" class="contact " style="margin-top: 7%; margin-bottom: 11%;">
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
  <?php echo '<script'; ?>
 src="assets/js/contact.js"><?php echo '</script'; ?>
>
<?php }
}
