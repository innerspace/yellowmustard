<?php /* Smarty version Smarty-3.1.12, created on 2012-10-06 18:42:44
         compiled from "/var/www/calibre-php/smarty/templates/books_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1593822848506bded34cf8c0-35129233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44209f3206700cd27ba3f4d41e0332a5830fa307' => 
    array (
      0 => '/var/www/calibre-php/smarty/templates/books_section.tpl',
      1 => 1349563129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1593822848506bded34cf8c0-35129233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_506bded3696af1_61848429',
  'variables' => 
  array (
    'books' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506bded3696af1_61848429')) {function content_506bded3696af1_61848429($_smarty_tpl) {?>
<table>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['book'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['book']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['name'] = 'book';
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['books']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total']);
?>
    <tr>
        <td width="300px" valign="top">
            <img src="<?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['cover'];?>
"><br>
        </td>
        <td valign="top" width="20%" style="font-size: '100%';">
            <div style="font-size: '100%';"><?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['title'];?>
</div>
            <div style="font-size: '80%';"><?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['field_authors'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['rating_url']){?><img style="vertical-align: middle" src="<?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['rating_url'];?>
"><br><?php }?>
            <div style="font-size: '80%';">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['format'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['format']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['name'] = 'format';
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['formats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['format']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['format']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['format']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['format']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['format']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['format']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['format']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['format']['total']);
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['formats'][$_smarty_tpl->getVariable('smarty')->value['section']['format']['index']]['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['formats'][$_smarty_tpl->getVariable('smarty')->value['section']['format']['index']]['format'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['formats'][$_smarty_tpl->getVariable('smarty')->value['section']['format']['index']]['size'];?>
<br>
            <?php endfor; endif; ?>
            </div>
        </td>
        <td valign="top" width="35%" style="font-size: 90%;">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['field'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['field']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['name'] = 'field';
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['field_names']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['field']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['field']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['field']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['field']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['field']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['field']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['field']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['field']['total']);
?>
	             <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['field_names'][$_smarty_tpl->getVariable('smarty')->value['section']['field']['index']];?>
: <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['field_values'][$_smarty_tpl->getVariable('smarty')->value['section']['field']['index']];?>
<br>
            <?php endfor; endif; ?>
            <?php if ($_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['details_url']){?>
                <div style="font-size: '80%';">
                    <a href=<?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['details_url'];?>
>Book details</a><br>
                </div>
            <?php }?>
        </td>
        <td valign="top" width="35%" style="font-size: 80%;">
            <?php if ($_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['comments']!=''){?><?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['comments'];?>
<br><?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cust'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['name'] = 'cust';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['custom_comments_names']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cust']['total']);
?>
                <?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['custom_comments_names'][$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']];?>
:<?php echo $_smarty_tpl->tpl_vars['books']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['custom_comments_values'][$_smarty_tpl->getVariable('smarty')->value['section']['cust']['index']];?>

            <?php endfor; endif; ?>
        </td>
    <tr>
        <td colspan="4"><hr></td>
    </tr>
    </tr>
<?php endfor; endif; ?>
</table>
<?php }} ?>