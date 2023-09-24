<?php
/* Smarty version 4.3.1, created on 2023-09-24 18:33:57
  from 'C:\wamp64\www\UnFramework-43\smarty-templates\pageSkeleton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65108115484252_41754685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60814a9f80de28463ed38411cbea0174714029e9' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework-43\\smarty-templates\\pageSkeleton.tpl',
      1 => 1691545999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65108115484252_41754685 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Site Global CSS -->
    <link href="assets/css/main.css" rel="stylesheet"> 
    <?php echo $_smarty_tpl->tpl_vars['jaxoncss']->value;?>

  </head>
<body>
  <header id="header" class="header d-flex align-items-center" style="border-bottom: 2px solid black;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index" class=" d-flex align-items-center ">
        <h1 class="head-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="Index">Home</a></li>
          <li><a href="About">About</a></li>
          <li><a href="Contact">Contact</a></li>
        </ul>
      </nav>
      <a href="#" class="mx-2 js-search-open">
        <span class=""></span>
      </a>
      <i class="bi bi-list mobile-nav-toggle"></i>
      <div class="search-form-wrap js-search-form-wrap">
        <form action="search-result.html" class="search-form">
          <span class="icon bi-search"></span>
          <input type="text" placeholder="Search" class="form-control">
          <button class="btn js-search-close">
            <span class="bi-x"></span>
          </button>
        </form>
      </div>
    </div>
    </div>
  </header>
  <main id="main">
    <!-- Content Here -->
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

  </main>
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
  <?php echo $_smarty_tpl->tpl_vars['jaxonjs']->value;?>

  <?php echo $_smarty_tpl->tpl_vars['jaxonscript']->value;?>

</body>
</html><?php }
}
