<?php
/* Smarty version 4.3.1, created on 2023-08-09 01:54:32
  from 'C:\wamp64\www\UnFramework\smarty-templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d2f1d8e2d7b9_89491530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b77af975dce6429666744da300a5be1308d27c' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\header.tpl',
      1 => 1691544070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d2f1d8e2d7b9_89491530 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- This is the page navigation template -->
<header id="header" class="header d-flex align-items-center" style="border-bottom: 2px solid black;">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="index" class=" d-flex align-items-center ">
      <h1 class="head-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    </a>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="Home">Home</a></li>
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
<!-- End Header --><?php }
}
