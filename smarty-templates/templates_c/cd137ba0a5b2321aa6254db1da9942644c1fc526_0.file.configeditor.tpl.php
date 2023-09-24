<?php
/* Smarty version 4.3.1, created on 2023-08-09 01:29:43
  from 'C:\wamp64\www\UnFramework\smarty-templates\configeditor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d2ec07bf18e7_82549307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd137ba0a5b2321aa6254db1da9942644c1fc526' => 
    array (
      0 => 'C:\\wamp64\\www\\UnFramework\\smarty-templates\\configeditor.tpl',
      1 => 1686509481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagehead.tpl' => 1,
    'file:buttons.tpl' => 1,
  ),
),false)) {
function content_64d2ec07bf18e7_82549307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:pagehead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<style>
    body{
    color: black;
    background: LightGray;
    }
    .form-group{
    margin: 5px;
    }
    .bdr{
    border:1px solid black;
    }
    .form-main{
    width: 60%;
    margin-left: 20%;
    }
</style>
</head>
<body class="home-body">
    <div class="container">
        <div classs="row" style="text-align: center; Margin-top: 5%;">
            <h3>Configuration Editor</h3>
        </div>
        <form id="form1" name="form1" 
            style="padding-top: 2%; width: 75%; margin-left: 10%; margin-top: 20%;">
            <!-- A set of buttons to call the server to do things -->
            <?php $_smarty_tpl->_subTemplateRender("file:buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- The requested server opertion -->
            <input type="hidden" id="opcode" name="opcode"/>
            <!-- The DB table record PK - "id" -->
            <input type="hidden" id="id" name="id"/>
            <!-- Column to use for the readby  query-->
            <input type="hidden" id="readbycode" name="readbycode" value="opt"/>
            <!-- List of options and their descriptions. Change triggers a read on
                on the selected option. Not sent when the form is serialized 
                -->
            <div class="form-group row">
                <label for="optlist" class="col-sm-4 col-form-label">Choose an Option</label>
                <div class="col-sm-8">
                    <select class="form-select" id="optlist"  onchange="readOption()">
                    <?php echo $_smarty_tpl->tpl_vars['options']->value;?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="opt" class="col-sm-4 col-form-label">Option Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bdr" id="opt" name="opt"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="val" class="col-sm-4 col-form-label">Value:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bdr" id="val" name="val"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-4 col-form-label">Description:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control bdr" id="description" name="description"/>
                </div>
            </div>
        </form>
    </div>
    <!--end container-->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/config.js"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['jaxonjs']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['jaxoncss']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['jaxonscript']->value;?>
      
</body>
</html>    <?php }
}
