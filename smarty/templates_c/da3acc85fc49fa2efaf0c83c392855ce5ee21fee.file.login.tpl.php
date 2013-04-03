<?php /* Smarty version Smarty-3.1.12, created on 2012-10-03 06:10:17
         compiled from "/var/www/calibre-php/smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1582549609506bd6c91345a5-38721905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3acc85fc49fa2efaf0c83c392855ce5ee21fee' => 
    array (
      0 => '/var/www/calibre-php/smarty/templates/login.tpl',
      1 => 1292530544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1582549609506bd6c91345a5-38721905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_506bd6c923ee40_48638568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506bd6c923ee40_48638568')) {function content_506bd6c923ee40_48638568($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Home"), 0);?>


<form action="index.php" method="post">
<table align="center">
<tr>
<td style="text-align:center;" colspan="2">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<br>Please Login
</td>
</tr>
<tr>
<td>
    User name:</td>
<td>
    <input name="name" type="text"></td>
</tr>
<tr>
<td>
    Password:
</td>
<td>
    <input name="password" type="password"></td>
</tr>
<tr>
<td style="text-align:center;" colspan="2">
    <input name="Login" type="submit" value="login">
</td>
</tr>
</table>
    </form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('foo'=>'bar'), 0);?>


<?php }} ?>