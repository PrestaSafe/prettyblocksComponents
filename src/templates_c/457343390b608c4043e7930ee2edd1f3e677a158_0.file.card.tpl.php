<?php
/* Smarty version 4.5.5, created on 2025-04-21 11:25:59
  from '/Users/guillaume/Apps/smartycomponents/src/templates/components/card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68062b47a59fa3_97402385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457343390b608c4043e7930ee2edd1f3e677a158' => 
    array (
      0 => '/Users/guillaume/Apps/smartycomponents/src/templates/components/card.tpl',
      1 => 1745092646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68062b47a59fa3_97402385 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden" <?php if ((isset($_smarty_tpl->tpl_vars['props']->value))) {
echo $_smarty_tpl->tpl_vars['props']->value;
}?>>
    <div class="p-5">
        <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
            <div class="mb-4 text-xl font-bold tracking-tight text-gray-900">
                <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['card_content']->value))) {?>
            <div class="text-gray-700">
                <?php echo $_smarty_tpl->tpl_vars['card_content']->value;?>

            </div>
        <?php }?>
    </div>
</div><?php }
}
