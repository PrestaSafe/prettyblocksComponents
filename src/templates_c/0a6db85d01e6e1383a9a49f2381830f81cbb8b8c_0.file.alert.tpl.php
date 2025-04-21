<?php
/* Smarty version 4.5.5, created on 2025-04-21 11:25:59
  from '/Users/guillaume/Apps/smartycomponents/src/templates/components/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68062b47a664c2_09829335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a6db85d01e6e1383a9a49f2381830f81cbb8b8c' => 
    array (
      0 => '/Users/guillaume/Apps/smartycomponents/src/templates/components/alert.tpl',
      1 => 1745092646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68062b47a664c2_09829335 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['params']->value['type'] == 'info') {?>
<div class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'warning') {?>
<div class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'success') {?>
<div class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'danger' || $_smarty_tpl->tpl_vars['params']->value['type'] == 'error') {?>
<div class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } else { ?>
<div class="p-4 mb-4 text-gray-800 border border-gray-300 rounded-lg bg-gray-50" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }?> <?php }
}
