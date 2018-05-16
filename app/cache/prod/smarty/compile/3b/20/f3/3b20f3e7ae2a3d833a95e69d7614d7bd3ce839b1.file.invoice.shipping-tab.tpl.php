<?php /* Smarty version Smarty-3.1.19, created on 2018-05-16 12:21:09
         compiled from "/opt/lampp/htdocs/prestashop/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11596635245afbd4dd4ce040-83788533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b20f3e7ae2a3d833a95e69d7614d7bd3ce839b1' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/pdf/invoice.shipping-tab.tpl',
      1 => 1525861098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11596635245afbd4dd4ce040-83788533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afbd4dd4d0f43_21865779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afbd4dd4d0f43_21865779')) {function content_5afbd4dd4d0f43_21865779($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
