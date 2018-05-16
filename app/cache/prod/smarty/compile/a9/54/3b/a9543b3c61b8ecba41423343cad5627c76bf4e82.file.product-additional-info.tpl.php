<?php /* Smarty version Smarty-3.1.19, created on 2018-05-16 12:07:01
         compiled from "/opt/lampp/htdocs/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13833590465afbd18d71bd83-15383764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9543b3c61b8ecba41423343cad5627c76bf4e82' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1525861099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13833590465afbd18d71bd83-15383764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afbd18d71ccc7_13459323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afbd18d71ccc7_13459323')) {function content_5afbd18d71ccc7_13459323($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
