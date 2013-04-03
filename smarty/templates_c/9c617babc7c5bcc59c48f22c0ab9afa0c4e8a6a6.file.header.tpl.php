<?php /* Smarty version Smarty-3.1.12, created on 2012-10-06 09:04:48
         compiled from "/var/www/calibre-php/smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1504941489506bd6c92e3c50-73186812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c617babc7c5bcc59c48f22c0ab9afa0c4e8a6a6' => 
    array (
      0 => '/var/www/calibre-php/smarty/templates/header.tpl',
      1 => 1349528671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1504941489506bd6c92e3c50-73186812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_506bd6c9431907_57028964',
  'variables' => 
  array (
    'title' => 0,
    'page_title' => 0,
    'last_search' => 0,
    'search_error' => 0,
    'page' => 0,
    'page_back' => 0,
    'maxpage' => 0,
    'prev_next' => 0,
    'item' => 0,
    'page_forw' => 0,
    'sortable_fields' => 0,
    'sortable' => 0,
    'current_sortable' => 0,
    'current_sort_direction' => 0,
    'use_back' => 0,
    'up_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506bd6c9431907_57028964')) {function content_506bd6c9431907_57028964($_smarty_tpl) {?>
<html lang="en">

<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>

<body>
<div style="border-width: thin; border-style: groove; background-color: #E8A813; font-family: 'Arial Rounded MT Bold';">
<table width="100%">
    <tr>
    <td>
        <span style="font-size:large"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
<br></span><span style="font-size:medium"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>

    </td>
    <td>&nbsp;</td>
    <td align="right">
        <form action="index.php" method="get" >
            <div>
                <input name="query" type="text">
                <input style="vertical-align:top" name="search" type="submit" value="Search">
                <input type="hidden" name="m" value="search">
            </div>
            <div style="font-size:80%">
                Current search: <?php echo $_smarty_tpl->tpl_vars['last_search']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['search_error']->value){?><br><?php echo $_smarty_tpl->tpl_vars['search_error']->value;?>
<?php }?>
            </div>
        </form>
    </td>
    </tr>
    <tr>
<?php if ($_smarty_tpl->tpl_vars['page']->value){?>
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
<?php }else{ ?>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
<?php }?>
    <td align="right" valign="top">
    <span style="font-size:small">
        <?php if ($_smarty_tpl->tpl_vars['use_back']->value){?><a href="javascript: history.go(-1)">Back</a><?php }?>
        <a href="index.php">Home</a>
        <?php if ($_smarty_tpl->tpl_vars['up_url']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['up_url']->value;?>
">Up</a><?php }else{ ?>Up<?php }?>
    </span>
    </td>
    </tr>
</table>
</div>
<?php }} ?>