<?php
/* Smarty version 4.3.1, created on 2023-09-08 23:14:07
  from 'C:\wamp64\www\UnFramework\smarty-templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64fbaabfe7d856_90466130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3da37ba418095437218bb986efa6581487e803bc' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\index.tpl',
      1 => 1691545915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fbaabfe7d856_90466130 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="d-flex justify-content-center">
      <button class="btn btn-primary me-2" onclick="sayWelcome()">Click for Welcome</button>
      <button class="btn btn-primary" onclick="getImage()">Click for Image</button>
    </div>
       <!-- A contact form to be sent to the server -->
       <div class="d-flex justify-content-center "style="margin-top: 2%; margin-bottom: 2%;">
          <form class="form" id="form1">
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
            <div class="text-center mt-3"><button class="btn btn-primary" type="button" onclick="submitForm()">Send Message</button></div>
          </form>
        </div>
        <!-- End Contact Form -->

    <!-- The servr side code sends the responses to this div. -->
    <div class="d-flex justify-content-center mb-3" id="target" name="target"></div>
    <!-- Content Ends -->
  <?php echo '<script'; ?>
 src="assets/js/index.js"><?php echo '</script'; ?>
>
<?php }
}
