<?php /* Smarty version 3.1.27, created on 2017-03-22 12:07:44
         compiled from "C:\xampp\htdocs\modx\manager\templates\default\element\tv\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:448658d25b00760b37_87616761%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950f94e53cebaa1758b5d0935ff4a789e3cd5107' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modx\\manager\\templates\\default\\element\\tv\\create.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448658d25b00760b37_87616761',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d25b00766769_10702796',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d25b00766769_10702796')) {
function content_58d25b00766769_10702796 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '448658d25b00760b37_87616761';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>