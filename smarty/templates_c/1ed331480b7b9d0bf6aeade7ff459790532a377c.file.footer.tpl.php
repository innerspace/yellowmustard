<?php /* Smarty version Smarty-3.1.12, created on 2012-10-06 18:18:51
         compiled from "/var/www/calibre-php/smarty/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89129776506bd6c946d141-45832631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed331480b7b9d0bf6aeade7ff459790532a377c' => 
    array (
      0 => '/var/www/calibre-php/smarty/templates/footer.tpl',
      1 => 1349561889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89129776506bd6c946d141-45832631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_506bd6c94c5638_66895251',
  'variables' => 
  array (
    'current_library' => 0,
    'current_date' => 0,
    'current_version' => 0,
    'logged_in_as' => 0,
    'page_back' => 0,
    'page' => 0,
    'maxpage' => 0,
    'prev_next' => 0,
    'item' => 0,
    'page_forw' => 0,
    'sortable_fields' => 0,
    'sortable' => 0,
    'current_sortable' => 0,
    'current_sort_direction' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506bd6c94c5638_66895251')) {function content_506bd6c94c5638_66895251($_smarty_tpl) {?>﻿
<div style="float:none; border-width: thin; border-style: groove; background-color: #E8A813; font-size: medium; font-family: 'Century Gothic';">
    <div style="float:right;">Current library: <?php echo $_smarty_tpl->tpl_vars['current_library']->value;?>
</div>
    <div style="float:left;">Current date: <?php echo $_smarty_tpl->tpl_vars['current_date']->value;?>
</div>
    <br>
    <div style="float:right;">Current version: <?php echo $_smarty_tpl->tpl_vars['current_version']->value;?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['logged_in_as']->value){?><div style="float:left;">logged in as: <?php echo $_smarty_tpl->tpl_vars['logged_in_as']->value;?>
</div><?php }?>
    <br>
    
    
    <table width="100%">
    <tr>
    <form action="index.php" method="get" >
        <td>
            <?php if ($_smarty_tpl->tpl_vars['page_back']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['page_back']->value;?>
">prev</a><?php }else{ ?>prev<?php }?>
            &nbsp;&nbsp;&nbsp;Page <input name="p" type="text" size="1" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
            <input name="gotopage" type="submit" value="Go!"> of <?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
&nbsp;&nbsp;&nbsp;
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prev_next']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
">
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['page_forw']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['page_forw']->value;?>
">next</a><?php }else{ ?>next<?php }?>
          </td>
    </form>
    <form action="index.php" method="get" >
        <td>
            Sort on:
            <select name="sort_by" id="sortable">
            <?php  $_smarty_tpl->tpl_vars['sortable'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sortable']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sortable_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sortable']->key => $_smarty_tpl->tpl_vars['sortable']->value){
$_smarty_tpl->tpl_vars['sortable']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['sortable']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sortable']->value==$_smarty_tpl->tpl_vars['current_sortable']->value){?>SELECTED<?php }?>><?php echo $_smarty_tpl->tpl_vars['sortable']->value;?>
</option>
            <?php } ?>
            </select>
            &nbsp;
            <select name="sort_direction">
                <option value="0" <?php if ($_smarty_tpl->tpl_vars['current_sort_direction']->value==0){?>SELECTED<?php }?>>Ascending</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['current_sort_direction']->value!=0){?>SELECTED<?php }?>>Descending</option>
            </select>
            <input type="hidden" name="m" value="sort">
            <input name="sort" type="submit" value="Go!">
        </td>
    </form>
    </tr>
    </table>
    
    
    
</div>
</body>
</html>
<?php }} ?>