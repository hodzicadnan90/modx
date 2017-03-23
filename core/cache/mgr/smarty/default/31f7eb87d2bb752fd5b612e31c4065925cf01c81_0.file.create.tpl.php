<?php /* Smarty version 3.1.27, created on 2017-03-22 11:59:53
         compiled from "C:\xampp\htdocs\modx\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:653658d25929cb4300_98165276%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f7eb87d2bb752fd5b612e31c4065925cf01c81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modx\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653658d25929cb4300_98165276',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d25929cbbf96_98207895',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d25929cbbf96_98207895')) {
function content_58d25929cbbf96_98207895 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '653658d25929cb4300_98165276';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>