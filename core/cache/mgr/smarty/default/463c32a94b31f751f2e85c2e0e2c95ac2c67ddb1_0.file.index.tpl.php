<?php /* Smarty version 3.1.27, created on 2017-03-22 11:42:04
         compiled from "C:\xampp\htdocs\modx\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2324658d254fc291901_32912672%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '463c32a94b31f751f2e85c2e0e2c95ac2c67ddb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modx\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2324658d254fc291901_32912672',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d254fc2ac7d3_78538802',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d254fc2ac7d3_78538802')) {
function content_58d254fc2ac7d3_78538802 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2324658d254fc291901_32912672';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>