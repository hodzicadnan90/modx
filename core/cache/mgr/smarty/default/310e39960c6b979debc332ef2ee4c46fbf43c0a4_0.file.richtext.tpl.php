<?php /* Smarty version 3.1.27, created on 2017-03-22 12:10:52
         compiled from "C:\xampp\htdocs\modx\manager\templates\default\element\tv\renders\input\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1413558d25bbc02a649_27029624%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '310e39960c6b979debc332ef2ee4c46fbf43c0a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modx\\manager\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1486535872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1413558d25bbc02a649_27029624',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d25bbc09b662_91734948',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d25bbc09b662_91734948')) {
function content_58d25bbc09b662_91734948 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1413558d25bbc02a649_27029624';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>