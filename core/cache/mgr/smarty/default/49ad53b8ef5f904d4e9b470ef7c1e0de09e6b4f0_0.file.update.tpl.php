<?php /* Smarty version 3.1.27, created on 2017-03-22 12:01:00
         compiled from "C:\xampp\htdocs\modx\manager\templates\default\element\chunk\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2962658d2596ce29189_40036717%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49ad53b8ef5f904d4e9b470ef7c1e0de09e6b4f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modx\\manager\\templates\\default\\element\\chunk\\update.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2962658d2596ce29189_40036717',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d2596ce2f0a5_70267227',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d2596ce2f0a5_70267227')) {
function content_58d2596ce2f0a5_70267227 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2962658d2596ce29189_40036717';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>