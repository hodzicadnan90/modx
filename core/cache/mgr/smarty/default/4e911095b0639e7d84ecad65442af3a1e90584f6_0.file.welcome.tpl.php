<?php /* Smarty version 3.1.27, created on 2017-03-20 09:12:23
         compiled from "C:\xampp\htdocs\modx\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:787458cf8ee7aca1f1_05654866%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e911095b0639e7d84ecad65442af3a1e90584f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modx\\manager\\templates\\default\\welcome.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787458cf8ee7aca1f1_05654866',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58cf8ee7acda72_73869684',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58cf8ee7acda72_73869684')) {
function content_58cf8ee7acda72_73869684 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '787458cf8ee7aca1f1_05654866';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>