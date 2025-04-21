<?php
/* Smarty version 4.5.5, created on 2025-04-21 11:23:45
  from '/Users/guillaume/Apps/smartycomponents/src/templates/components/badge.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68062ac1795a60_63997786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd86f67de298b7eb8a273dec53bbc5939d757ea' => 
    array (
      0 => '/Users/guillaume/Apps/smartycomponents/src/templates/components/badge.tpl',
      1 => 1745092571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68062ac1795a60_63997786 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['params']->value['type'] == 'primary') {?>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</span>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'secondary') {?>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</span>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'success') {?>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</span>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'danger') {?>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</span>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'warning') {?>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</span>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'info') {?>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</span>
<?php } else { ?>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</span>
<?php }?> <?php }
}
