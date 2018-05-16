<?php /* Smarty version Smarty-3.1.19, created on 2018-05-16 12:18:59
         compiled from "/opt/lampp/htdocs/prestashop/modules/ps_wirepayment/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15034628205afbd45b9e1380-30095335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154fd2804ca307e73d1b6e918005f39ea3fa3a84' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/ps_wirepayment/views/templates/hook/infos.tpl',
      1 => 1525861098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15034628205afbd45b9e1380-30095335',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afbd45ba28c77_63473186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afbd45ba28c77_63473186')) {function content_5afbd45ba28c77_63473186($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
