<?php /* Smarty version Smarty-3.1.12, created on 2012-10-03 02:44:35
         compiled from "/var/www/calibre-php/smarty/templates/titles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1830124725506bded3244865-94290924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1378e006f5d47800a95794e00956655faea068cd' => 
    array (
      0 => '/var/www/calibre-php/smarty/templates/titles.tpl',
      1 => 1288357658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830124725506bded3244865-94290924',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_506bded34644a9_19129766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506bded34644a9_19129766')) {function content_506bded34644a9_19129766($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"All Titles"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("books_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>