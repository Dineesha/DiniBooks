<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 17:22:08
         compiled from "/opt/lampp/htdocs/prestashop/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5218486915b02b2e8975526-19952170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da34c692703ff6fe9bb67eb46bb044bb5e29edc' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/welcome/views/templates/lost.tpl',
      1 => 1525861098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5218486915b02b2e8975526-19952170',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02b2e8977a94_91637032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02b2e8977a94_91637032')) {function content_5b02b2e8977a94_91637032($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
