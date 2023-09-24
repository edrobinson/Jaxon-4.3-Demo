<?php
/* Smarty version 4.3.1, created on 2023-08-09 01:54:32
  from 'C:\wamp64\www\UnFramework\smarty-templates\pagehead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d2f1d8da6231_72350892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b81a387dea8b78863e4a14bd86bc0b3b660c2a5e' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\pagehead.tpl',
      1 => 1686195801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d2f1d8da6231_72350892 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
  Sample HTML page head for UnFramework
  $title is the Smarty tag for the title tag
  $jaxoncss is the tag for the Jaxon framework CSS
-->
<!DOCTYPE html>
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

  </head><?php }
}
