<?php
/* Smarty version 4.5.5, created on 2025-04-21 11:25:59
  from '/Users/guillaume/Apps/smartycomponents/src/templates/components/button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68062b47a4b3c7_25798244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '311b3bf6dad8913762345bb2e4bf70fb1e4007fa' => 
    array (
      0 => '/Users/guillaume/Apps/smartycomponents/src/templates/components/button.tpl',
      1 => 1745092409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68062b47a4b3c7_25798244 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['params']->value['props']))) {
echo $_smarty_tpl->tpl_vars['params']->value['props'];
}?>>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</button> <?php }
}
