<?php /* Smarty version Smarty-3.1.12, created on 2012-10-03 03:56:40
         compiled from "/var/www/calibre-php/smarty/templates/books.tpl" */ ?>
<?php /*%%SmartyHeaderCode:498336272506befb8941936-66179517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '038455cae9bab5f354472622fb49c23c6b7c291a' => 
    array (
      0 => '/var/www/calibre-php/smarty/templates/books.tpl',
      1 => 1292336424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498336272506befb8941936-66179517',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_506befb89ece14_32213082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506befb89ece14_32213082')) {function content_506befb89ece14_32213082($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>((string)$_smarty_tpl->tpl_vars['category_name']->value).": ".((string)$_smarty_tpl->tpl_vars['category_value']->value)), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("books_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>