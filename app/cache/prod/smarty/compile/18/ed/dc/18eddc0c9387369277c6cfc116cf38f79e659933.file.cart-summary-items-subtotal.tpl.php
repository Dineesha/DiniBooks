<?php /* Smarty version Smarty-3.1.19, created on 2018-05-16 12:07:15
         compiled from "/opt/lampp/htdocs/prestashop/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12303587905afbd19b765e55-01533746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18eddc0c9387369277c6cfc116cf38f79e659933' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1525861099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12303587905afbd19b765e55-01533746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afbd19b769595_88452251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afbd19b769595_88452251')) {function content_5afbd19b769595_88452251($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
