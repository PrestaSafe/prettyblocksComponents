<?php
/* Smarty version 4.5.5, created on 2025-04-21 11:25:59
  from '/Users/guillaume/Apps/smartycomponents/src/templates/demo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68062b47a25995_93139900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da154afc64c1cd222a944640675316ad9b5e258' => 
    array (
      0 => '/Users/guillaume/Apps/smartycomponents/src/templates/demo.tpl',
      1 => 1745092684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68062b47a25995_93139900 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartyComponents Demo</title>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"><?php echo '</script'; ?>
>
    </head>
    <body class="bg-gray-50 p-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">SmartyComponents Demo</h1>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Card Component</h2>
                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('props'=>"x-data='"."{ "."show: false, count: 0 }'"));
$_block_repeat=true;
echo $_block_plugin1(array('props'=>"x-data='"."{ "."show: false, count: 0 }'"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['slot'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['slot'][0] : null;
if (!is_callable($_block_plugin2)) {
throw new SmartyException('block tag \'slot\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('slot', array('name'=>"title"));
$_block_repeat=true;
echo $_block_plugin2(array('name'=>"title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><h3>Card avec Tailwind CSS</h3><?php $_block_repeat=false;
echo $_block_plugin2(array('name'=>"title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['slot'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['slot'][0] : null;
if (!is_callable($_block_plugin3)) {
throw new SmartyException('block tag \'slot\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('slot', array('name'=>"card_content"));
$_block_repeat=true;
echo $_block_plugin3(array('name'=>"card_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <p class="mb-4">Ce composant utilise maintenant Tailwind CSS v4 pour le style.</p>
                        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0] : null;
if (!is_callable($_block_plugin4)) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('props'=>'x-on:click="show = true"'));
$_block_repeat=true;
echo $_block_plugin4(array('props'=>'x-on:click="show = true"'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> Show dynamic content <?php $_block_repeat=false;
echo $_block_plugin4(array('props'=>'x-on:click="show = true"'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <div x-show="show" x-transition>
                            <p>Dynamic content</p>
                        </div>
                        <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0] : null;
if (!is_callable($_block_plugin5)) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('props'=>'x-on:click="count++"'));
$_block_repeat=true;
echo $_block_plugin5(array('props'=>'x-on:click="count++"'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> Incrementer <span x-text="count"></span><?php $_block_repeat=false;
echo $_block_plugin5(array('props'=>'x-on:click="count++"'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_block_repeat=false;
echo $_block_plugin3(array('name'=>"card_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin1(array('props'=>"x-data='"."{ "."show: false, count: 0 }'"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Button Component</h2>
                <div class="space-y-2">
                    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0] : null;
if (!is_callable($_block_plugin6)) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array());
$_block_repeat=true;
echo $_block_plugin6(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> Bouton standard <?php $_block_repeat=false;
echo $_block_plugin6(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0] : null;
if (!is_callable($_block_plugin7)) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('class'=>"bg-green-500 hover:bg-green-600"));
$_block_repeat=true;
echo $_block_plugin7(array('class'=>"bg-green-500 hover:bg-green-600"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> Bouton vert <?php $_block_repeat=false;
echo $_block_plugin7(array('class'=>"bg-green-500 hover:bg-green-600"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0] : null;
if (!is_callable($_block_plugin8)) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('class'=>"bg-red-500 hover:bg-red-600"));
$_block_repeat=true;
echo $_block_plugin8(array('class'=>"bg-red-500 hover:bg-red-600"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> Bouton rouge <?php $_block_repeat=false;
echo $_block_plugin8(array('class'=>"bg-red-500 hover:bg-red-600"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0] : null;
if (!is_callable($_block_plugin9)) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('class'=>"bg-purple-500 hover:bg-purple-600"));
$_block_repeat=true;
echo $_block_plugin9(array('class'=>"bg-purple-500 hover:bg-purple-600"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> Bouton violet <?php $_block_repeat=false;
echo $_block_plugin9(array('class'=>"bg-purple-500 hover:bg-purple-600"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Alert Component</h2>
                
                <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0] : null;
if (!is_callable($_block_plugin10)) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('type'=>"info"));
$_block_repeat=true;
echo $_block_plugin10(array('type'=>"info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Info!</span> Ce message utilise le style Tailwind CSS.
                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin10(array('type'=>"info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                
                <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0] : null;
if (!is_callable($_block_plugin11)) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('type'=>"warning"));
$_block_repeat=true;
echo $_block_plugin11(array('type'=>"warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Attention!</span> Ce message d'avertissement utilise le style Tailwind CSS.
                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin11(array('type'=>"warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                
                <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0] : null;
if (!is_callable($_block_plugin12)) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('type'=>"success"));
$_block_repeat=true;
echo $_block_plugin12(array('type'=>"success"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Succès!</span> L'opération a réussi avec le style Tailwind CSS.
                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin12(array('type'=>"success"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                
                <?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0] : null;
if (!is_callable($_block_plugin13)) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('type'=>"danger"));
$_block_repeat=true;
echo $_block_plugin13(array('type'=>"danger"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Erreur!</span> Une erreur est survenue avec le style Tailwind CSS.
                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin13(array('type'=>"danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Composants combinés</h2>
                <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0] : null;
if (!is_callable($_block_plugin14)) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array());
$_block_repeat=true;
echo $_block_plugin14(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['slot'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['slot'][0] : null;
if (!is_callable($_block_plugin15)) {
throw new SmartyException('block tag \'slot\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('slot', array('name'=>"title"));
$_block_repeat=true;
echo $_block_plugin15(array('name'=>"title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><h3>Carte avec alerte</h3><?php $_block_repeat=false;
echo $_block_plugin15(array('name'=>"title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['slot'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['slot'][0] : null;
if (!is_callable($_block_plugin16)) {
throw new SmartyException('block tag \'slot\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('slot', array('name'=>"card_content"));
$_block_repeat=true;
echo $_block_plugin16(array('name'=>"card_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <p class="mb-4">Cette carte contient une alerte et un bouton.</p>
                        
                        <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0] : null;
if (!is_callable($_block_plugin17)) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('type'=>"warning"));
$_block_repeat=true;
echo $_block_plugin17(array('type'=>"warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-medium">Attention!</span> N'oubliez pas de confirmer.
                            </div>
                        <?php $_block_repeat=false;
echo $_block_plugin17(array('type'=>"warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        
                        <div class="mt-4">
                            <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0] : null;
if (!is_callable($_block_plugin18)) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('class'=>"bg-green-500 hover:bg-green-600"));
$_block_repeat=true;
echo $_block_plugin18(array('class'=>"bg-green-500 hover:bg-green-600"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?> Confirmer <?php $_block_repeat=false;
echo $_block_plugin18(array('class'=>"bg-green-500 hover:bg-green-600"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php $_block_repeat=false;
echo $_block_plugin16(array('name'=>"card_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin14(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Badge Component</h2>
                <div class="flex flex-wrap gap-2 items-center">
                    <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin19)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"primary"));
$_block_repeat=true;
echo $_block_plugin19(array('type'=>"primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Badge<?php $_block_repeat=false;
echo $_block_plugin19(array('type'=>"primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin20)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"secondary"));
$_block_repeat=true;
echo $_block_plugin20(array('type'=>"secondary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Secondary<?php $_block_repeat=false;
echo $_block_plugin20(array('type'=>"secondary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin21)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"success"));
$_block_repeat=true;
echo $_block_plugin21(array('type'=>"success"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Success<?php $_block_repeat=false;
echo $_block_plugin21(array('type'=>"success"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin22)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"danger"));
$_block_repeat=true;
echo $_block_plugin22(array('type'=>"danger"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Danger<?php $_block_repeat=false;
echo $_block_plugin22(array('type'=>"danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin23)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"warning"));
$_block_repeat=true;
echo $_block_plugin23(array('type'=>"warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Warning<?php $_block_repeat=false;
echo $_block_plugin23(array('type'=>"warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin24)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"info"));
$_block_repeat=true;
echo $_block_plugin24(array('type'=>"info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Info<?php $_block_repeat=false;
echo $_block_plugin24(array('type'=>"info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
                
                <div class="mt-6">
                    <p class="text-gray-700 mb-2">Badges with icons:</p>
                    <div class="flex flex-wrap gap-2 items-center">
                        <?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin25)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"primary"));
$_block_repeat=true;
echo $_block_plugin25(array('type'=>"primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Completed
                        <?php $_block_repeat=false;
echo $_block_plugin25(array('type'=>"primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        
                        <?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['badge'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['badge'][0] : null;
if (!is_callable($_block_plugin26)) {
throw new SmartyException('block tag \'badge\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('badge', array('type'=>"warning"));
$_block_repeat=true;
echo $_block_plugin26(array('type'=>"warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            Pending
                        <?php $_block_repeat=false;
echo $_block_plugin26(array('type'=>"warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            </section>
            
            <footer class="text-center text-gray-500 mt-10 pt-5 border-t border-gray-200">
                <p>SmartyComponents avec Tailwind CSS v4</p>
            </footer>
        </div>
    </body>
</html><?php }
}
