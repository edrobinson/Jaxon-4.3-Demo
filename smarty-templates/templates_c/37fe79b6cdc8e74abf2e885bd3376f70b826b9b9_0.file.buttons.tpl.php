<?php
/* Smarty version 4.3.1, created on 2023-08-09 01:29:43
  from 'C:\wamp64\www\UnFramework\smarty-templates\buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d2ec07e11075_59729892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37fe79b6cdc8e74abf2e885bd3376f70b826b9b9' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\buttons.tpl',
      1 => 1686195887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d2ec07e11075_59729892 (Smarty_Internal_Template $_smarty_tpl) {
?>    <br />
    <br />
    <div class="form-actions btn-group" style="margin-left: 240px">
      <button accesskey="I" type="button" class="btn btn-primary" onclick="handleRequest('insert')">
        <u>I</u>nsert </button>
      <button accesskey="F" type="button" class="btn btn-primary" onclick="handleRequest('readfirst')">
        <u>F</u>irst </button>
      <button accesskey="P" type="button" class="btn btn-primary" onclick="handleRequest('readprev')">
        <u>P</u>rev </button>
      <button accesskey="R" type="button" class="btn btn-primary" onclick="handleRequest('readby')">
        <u>R</u>ead </button>
      <button accesskey="N" type="button" class="btn btn-primary" onclick="handleRequest('readnext')">
        <u>N</u>ext </button>
      <button accesskey="S" type="button" class="btn btn-primary" onclick="handleRequest('readlast')">La <u>s</u>t </button>
      <!--<button accesskey="L" type="button" class="btn btn-primary" onclick="handleRequest('lookup')"><u>L</u>ookup</button>-->
      <button accesskey="U" type="button" class="btn btn-primary" onclick="handleRequest('update')">
        <u>U</u>pdate </button>
      <button accesskey="D" type="button" class="btn btn-primary" onclick="handleRequest('delete')">De <u>l</u>ete </button>
      <button accesskey="T" type="button" class="btn btn-primary" onclick="formReset()">Rese <u>t</u>
      </button>
    </div>
    <br />
    <br /><?php }
}
