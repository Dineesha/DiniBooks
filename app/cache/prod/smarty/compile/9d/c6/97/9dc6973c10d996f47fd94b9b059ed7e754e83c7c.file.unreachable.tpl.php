<?php /* Smarty version Smarty-3.1.19, created on 2018-05-16 12:07:23
         compiled from "/opt/lampp/htdocs/prestashop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10375560535afbd1a3dbf8b1-36464278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc6973c10d996f47fd94b9b059ed7e754e83c7c' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1525861099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10375560535afbd1a3dbf8b1-36464278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afbd1a3e05095_74479041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afbd1a3e05095_74479041')) {function content_5afbd1a3e05095_74479041($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
