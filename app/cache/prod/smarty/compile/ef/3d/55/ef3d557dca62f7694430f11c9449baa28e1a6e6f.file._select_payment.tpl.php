<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 14:27:01
         compiled from "/opt/lampp/htdocs/prestashop/admin5301xfosj/themes/default/template/controllers/orders/_select_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2926968965b0289dde2c3b6-74676569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3d557dca62f7694430f11c9449baa28e1a6e6f' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/admin5301xfosj/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1525861098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2926968965b0289dde2c3b6-74676569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'payment_modules' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0289dde4b360_06638262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0289dde4b360_06638262')) {function content_5b0289dde4b360_06638262($_smarty_tpl) {?>
<select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name'])&&$_smarty_tpl->tpl_vars['module']->value->name==$_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php } ?>
  <?php } else { ?>
      <option value="<?php echo smartyTranslate(array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl);?>
</option>
  <?php }?>
</select>
<?php }} ?>
