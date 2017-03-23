<?php /* Smarty version 3.1.27, created on 2017-03-20 09:10:57
         compiled from "C:\xampp\htdocs\modx\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:543758cf8e918d3ab1_64836221%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cc27a34d882ca3df928f7626dba079d5468f5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\modx\\setup\\templates\\footer.tpl',
      1 => 1486535874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '543758cf8e918d3ab1_64836221',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58cf8e918ed828_14644698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58cf8e918ed828_14644698')) {
function content_58cf8e918ed828_14644698 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/xampp/htdocs/modx/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '543758cf8e918d3ab1_64836221';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>