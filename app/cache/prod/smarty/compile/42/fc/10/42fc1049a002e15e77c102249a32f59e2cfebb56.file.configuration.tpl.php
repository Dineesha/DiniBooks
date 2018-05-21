<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 14:06:48
         compiled from "/opt/lampp/htdocs/prestashop/modules/amzpayments/views/templates/admin/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17345638975b0285202812b8-15883234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42fc1049a002e15e77c102249a32f59e2cfebb56' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop/modules/amzpayments/views/templates/admin/configuration.tpl',
      1 => 1526891798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17345638975b0285202812b8-15883234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'postSuccess' => 0,
    'ps' => 0,
    'postErrors' => 0,
    'pe' => 0,
    'display_cache_hint' => 0,
    'simple_path' => 0,
    'ld' => 0,
    'splr' => 0,
    'imgdir' => 0,
    'button_lang_var' => 0,
    'configform' => 0,
    'youtube_video_embed_link' => 0,
    'langdir' => 0,
    'videoamazonyoutube' => 0,
    'youtube_video_link' => 0,
    'videodir' => 0,
    'keys_valid' => 0,
    'allowed_return_url_1' => 0,
    'aru_counter' => 0,
    'aru' => 0,
    'allowed_return_url_2' => 0,
    'kyc_passed' => 0,
    'no_ssl' => 0,
    'reset_link' => 0,
    'hook_reset_link' => 0,
    'banners' => 0,
    'bannerset' => 0,
    'settyp' => 0,
    'bannertyp' => 0,
    'banner' => 0,
    'new_customer_link' => 0,
    'log_url' => 0,
    'faq_link' => 0,
    'module_name' => 0,
    'current_version' => 0,
    'after_reset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0285203a8898_89715552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0285203a8898_89715552')) {function content_5b0285203a8898_89715552($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('imgdir_assign', 'imgdir', null); ob_start(); ?>https://m.media-amazon.com/images/G/01/EPSDocumentation/AmazonPay/Prestashop/img/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('videodir_assign', 'videodir', null); ob_start(); ?>https://m.media-amazon.com/images/G/01/EPSDocumentation/AmazonPay/Prestashop/video/<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('langdir_assign', 'langdir', null); ob_start(); ?><?php if (!in_array($_smarty_tpl->tpl_vars['language_code']->value,array('de','es','fr','it','uk','us'))) {?>uk<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language_code']->value,'htmlall','UTF-8');?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array('button_lang_var_assign', 'button_lang_var', null); ob_start(); ?><?php if (!in_array($_smarty_tpl->tpl_vars['language_code']->value,array('de','es','fr','it'))) {?>UK<?php } else { ?><?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language_code']->value,'htmlall','UTF-8'));?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (isset($_smarty_tpl->tpl_vars['postSuccess']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postSuccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
		<div class="alert alert-success"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ps']->value,'htmlall','UTF-8');?>
</div>
	<?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['postErrors']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['pe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postErrors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pe']->key => $_smarty_tpl->tpl_vars['pe']->value) {
$_smarty_tpl->tpl_vars['pe']->_loop = true;
?>
		<div class="alert alert-danger"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['pe']->value,'htmlall','UTF-8');?>
</div>
	<?php } ?>
	<div class="alert alert-danger">
		<?php echo smartyTranslate(array('s'=>'If you need help, please [1]contact our support[/1]','tags'=>array('<a onclick="jQuery(\'#amztabs a[href=#amzcontactus]\').tab(\'show\');">'),'mod'=>'amzpayments'),$_smarty_tpl);?>

	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['display_cache_hint']->value) {?>
	<div class="alert alert-warning" role="alert">
		<?php echo smartyTranslate(array('s'=>'Please note: if you use server side caching (for example in combination with nginx), remember to empty it after saving the configuration.','mod'=>'amzpayments'),$_smarty_tpl);?>
				
	</div>				
<?php }?>

<form method="POST" action="https://payments-eu.amazon.com/register" target="_blank" id="amazonRegForm"> 
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['ref'],'htmlall','UTF-8');?>
" name="ref" />
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['locale'],'htmlall','UTF-8');?>
" name="locale" />  
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['spId'],'htmlall','UTF-8');?>
" name="spId" />  
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ld']->value,'htmlall','UTF-8');?>
" name="ld" /> 
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['uniqueId'],'htmlall','UTF-8');?>
" name="uniqueId" />  
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['allowedLoginDomains'],'htmlall','UTF-8');?>
" name="allowedLoginDomains[]" />
	<?php  $_smarty_tpl->tpl_vars['splr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['splr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['simple_path']->value['loginRedirectURLs_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['splr']->key => $_smarty_tpl->tpl_vars['splr']->value) {
$_smarty_tpl->tpl_vars['splr']->_loop = true;
?>
		<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['splr']->value,'htmlall','UTF-8');?>
" name="loginRedirectURLs[]" />
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['splr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['splr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['simple_path']->value['loginRedirectURLs_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['splr']->key => $_smarty_tpl->tpl_vars['splr']->value) {
$_smarty_tpl->tpl_vars['splr']->_loop = true;
?>
		<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['splr']->value,'htmlall','UTF-8');?>
" name="loginRedirectURLs[]" />
	<?php } ?>
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['storeDescription'],'htmlall','UTF-8');?>
" name="storeDescription" />  
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['language'],'htmlall','UTF-8');?>
" name="language" />  
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['returnMethod'],'htmlall','UTF-8');?>
" name="returnMethod" />
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['Source'],'htmlall','UTF-8');?>
" name="Source" />
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['sandboxMerchantIPNURL'],'htmlall','UTF-8');?>
" name="sandboxMerchantIPNURL" />
	<input type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['productionMerchantIPNURL'],'htmlall','UTF-8');?>
" name="productionMerchantIPNURL" />
</form>

<input type="hidden" name="button_img_dir_base" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'htmlall','UTF-8');?>
buttons/" />
<input type="hidden" name="button_img_lang_var" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_lang_var']->value,'htmlall','UTF-8');?>
" />

<div id="amzconfigarea">
<?php echo $_smarty_tpl->tpl_vars['configform']->value;?>
 

<div class="amzconfig">
	<ul class="nav nav-tabs" id="amztabs">
		<li class="active"><a href="#amzregistration" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Registration','mod'=>'amzpayments'),$_smarty_tpl);?>
</a></li>
		<li><a href="#amzconnect" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Connection','mod'=>'amzpayments'),$_smarty_tpl);?>
</a></li>
		<li><a href="#amzconfiguration" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'amzpayments'),$_smarty_tpl);?>
</a></li>
		<li><a href="#amzpromote" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Promotion','mod'=>'amzpayments'),$_smarty_tpl);?>
</a></li>
		<li><a href="#amzcontactus" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'amzpayments'),$_smarty_tpl);?>
</a></li>
		<li><a href="#amzfaq" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'FAQ','mod'=>'amzpayments'),$_smarty_tpl);?>
</a></li>
	</ul>
	<div class="tab-content panel">
		<div id="amzregistration" class="tab-pane active">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<p>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
amazon-payments.jpg" alt="amazon payments" class="img-responsive" />
					</p>					
					<p>
						<strong><?php echo smartyTranslate(array('s'=>'Amazon Pay: Amazon’s Payment and Checkout method for your website','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong>
					</p>
					<p>
						<?php echo smartyTranslate(array('s'=>'Add Amazon Pay to your website and allow Amazon customers to sign in with their Amazon credentials and easily pay with the address and payment information stored in their Amazon account.','mod'=>'amzpayments'),$_smarty_tpl);?>

						<br />			
					</p>
					<p>
						<strong><?php echo smartyTranslate(array('s'=>'Amazon Pay can help you:','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong><br />						
						<ul>
							<li><?php echo smartyTranslate(array('s'=>'Build customer loyalty','mod'=>'amzpayments'),$_smarty_tpl);?>
</li>
							<li><?php echo smartyTranslate(array('s'=>'Attract new customers','mod'=>'amzpayments'),$_smarty_tpl);?>
</li>
							<li><?php echo smartyTranslate(array('s'=>'Improve your conversion rate','mod'=>'amzpayments'),$_smarty_tpl);?>
</li>
							<li><?php echo smartyTranslate(array('s'=>'Reduce fraud','mod'=>'amzpayments'),$_smarty_tpl);?>
</li>
						</ul>                        
					</p>
					<p><strong><?php echo smartyTranslate(array('s'=>'Simply follow these 4 steps:','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong> &nbsp; 
						<a style="color:#FF9900;" id="showvideoprestashopyoutube" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a> <br />
					<ol>
						<li>
							<a id="simplepathRegTrigger" href='#' onclick="jQuery('#amazonRegForm').submit();"><?php echo smartyTranslate(array('s'=>'[1]Registration:[/1] Sign up for an Amazon Payments merchant account.','tags'=>array('<span>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
						</li>
						<li>
							<a id="showstepsetup" href="#" onclick="jQuery('#amztabs a[href=#amzconnect]').tab('show');"><?php echo smartyTranslate(array('s'=>'[1]Connection:[/1] Connect your Amazon Payments account with PrestaShop.','tags'=>array('<span>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
</a>                                    
						</li>
						<li>
							<a id="showstepconfiguration" href="#" onclick="jQuery('#amztabs a[href=#amzconfiguration]').tab('show');"><?php echo smartyTranslate(array('s'=>'[1]Configuration:[/1] Configure and activate the plugin.','tags'=>array('<span>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
						</li>
						<li>
							<a id="showstepconfiguration" href="#" onclick="jQuery('#amztabs a[href=#amzpromote]').tab('show');"><?php echo smartyTranslate(array('s'=>'[1]Promotion:[/1] Promote Amazon Pay on your website.','tags'=>array('<span>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
						</li>
					</ol>
                    <p> 
						<br />
                        <strong><?php echo smartyTranslate(array('s'=>'Important note, before you sign up:','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong><br />
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                        <?php echo smartyTranslate(array('s'=>'Before you start the registration, make sure you sign out of all Amazon accounts you might have.','mod'=>'amzpayments'),$_smarty_tpl);?>

                        <br />
                        <?php echo smartyTranslate(array('s'=>'Use an email address that you have never used for any Amazon account.','mod'=>'amzpayments'),$_smarty_tpl);?>

                        <br />
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                        <?php echo smartyTranslate(array('s'=>'If you have an Amazon Seller account (Selling on Amazon), sign out and use a different address to register your Amazon Payments account.','mod'=>'amzpayments'),$_smarty_tpl);?>

					</p>					
				</div>				
				<div class="col-xs-12 col-md-6">
					<div id="video">
                        <table>
                            <tr>
                                <td>
                                	<div class="responsive-video" style="display: none;">
                                    	<iframe id="videoprestashopyoutube" style="vertical-align:top;margin-left:30px;float:left;" width="640" height="360" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['youtube_video_embed_link']->value,'html','UTF-8');?>
" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <div id="carrouselAmazonPay" style="vertical-align:top;margin-left:30px;float:left;min-width:205px;max-height:365px;" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carrouselAmazonPay" data-slide-to="0" class="active"></li>
                                            <li data-target="#carrouselAmazonPay" data-slide-to="1"></li>
                                            <li data-target="#carrouselAmazonPay" data-slide-to="2"></li>
                                            <li data-target="#carrouselAmazonPay" data-slide-to="3"></li>
                                            <li data-target="#carrouselAmazonPay" data-slide-to="4"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img class="img-fluid" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/carousel/01.jpg" style="min-width:205px;max-height:365px;">
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/carousel/02.jpg" style="min-width:205px;max-height:365px;">
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/carousel/03.jpg" style="min-width:205px;max-height:365px;">
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/carousel/04.jpg" style="min-width:205px;max-height:365px;">
                                            </div>
                                            <div class="item">
                                            	<div class="responsive-video"><iframe id="videoamazonyoutube" width="480" height="288" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videoamazonyoutube']->value,'htmlall','UTF-8');?>
" frameborder="0" gesture="media" allowfullscreen></iframe></div>
                                            </div>
                                        </div>
    									<a class="carousel-control left" href="#carrouselAmazonPay" data-slide="prev">
    										<span class="glyphicon glyphicon-chevron-left"></span>
    									</a>
    									<a class="carousel-control right" href="#carrouselAmazonPay" data-slide="next">
    										<span class="glyphicon glyphicon-chevron-right"></span>
    									</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="margin-left:30px;margin-top:10px;">
                                        <span style="font-size:medium">                                  
                                            <img onclick="jQuery('#amazonRegForm').submit();" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/subscribe.jpg" style="cursor: pointer; height:30px;" />
                                        </span>&nbsp; <span style="font-weight: bold; text-transform: uppercase"><?php echo smartyTranslate(array('s'=>'or','mod'=>'amzpayments'),$_smarty_tpl);?>
</span> &nbsp;
                                        <a id="showstepconnect" style="color:#FF9900;cursor: pointer;" aria-hidden="true" onclick="jQuery('#amztabs a[href=#amzconnect]').tab('show');">
                                            <?php echo smartyTranslate(array('s'=>'Click here if you already have an Amazon Pay account','mod'=>'amzpayments'),$_smarty_tpl);?>

                                        </a> 
                                    </div> 
                                </td>
                            </tr>
                        </table>
                    </div> 				
				</div>
			</div>
		</div>
		<div id="amzconnect" class="tab-pane">
			<p>
				<a style="color:#FF9900; font-style: italic; font-weight: bold; font-size: 1.1em;" title="<?php echo smartyTranslate(array('s'=>'Watch our full integration video here','mod'=>'amzpayments'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['youtube_video_link']->value,'htmlall','UTF-8');?>
" target="_blank"><i class="fa fa-file-video-o" aria-hidden="true"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Watch our full integration video here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
			</p>
		
			<p>
				<strong>
					1. <?php echo smartyTranslate(array('s'=>'Import your access keys','mod'=>'amzpayments'),$_smarty_tpl);?>

				</strong>
				<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php echo smartyTranslate(array('s'=>'The access keys are needed to secure the communication between your site and the Amazon servers','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-info-circle" aria-hidden="true" style="color:forestgreen;"></i></span>
			</p>
			
			<div>
				<p style="margin-left: 24px">
					<i style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal1a"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See how to do it','mod'=>'amzpayments'),$_smarty_tpl);?>
</i>
                    <a style="color:#FF9900;cursor: pointer;" id="showvideoaccesskeys" title="<?php echo smartyTranslate(array('s'=>'Watch it','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch it','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>				
				</p>
				<div>
           			<div id="videoaccesskeys" style="width: 80%; clear: both">
            			<video controls="controls" style="max-width: 100%;">
							<source src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videodir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8');?>
/Keys<?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8'));?>
.mp4" type="video/webm" />
						</video>
					</div>
				</div>	
				<ol type="a">
					<li>
						<a style="cursor: pointer;" target="_blank" href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU"><?php echo smartyTranslate(array('s'=>'Sign in to your account on Seller Central, in a new browser window','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
					</li>
					<li>
						<?php echo smartyTranslate(array('s'=>'Click [1]Integration[/1], and then click [2]MWS Access Key[/2].','tags'=>array('<strong>','<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>

					</li>
					<li>
						<?php echo smartyTranslate(array('s'=>'Click the [1]Copy your keys[/1] button in the top right corner to generate the keys.','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>

					</li>
					<li>
						<?php echo smartyTranslate(array('s'=>'Highlight the text [1]with the curly brackets[/1] in the popup and copy it to the clipboard.','tags'=>array('<i>'),'mod'=>'amzpayments'),$_smarty_tpl);?>

						<i style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See how to do it','mod'=>'amzpayments'),$_smarty_tpl);?>
</i>
					</li>
					<li>
						<?php echo smartyTranslate(array('s'=>'Paste your keys into the box below','mod'=>'amzpayments'),$_smarty_tpl);?>

						<textarea class="form-control form-control-sm" id="jsonMWS" rows="3"></textarea>
					</li>
					<li>
						<?php echo smartyTranslate(array('s'=>'Select your region and click [1]Save[/1]','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>

					</li>
				</ol>
			</div>
			
			<div id="connectmessages">
            	<div class="alert alert-warning" id="waitforverification">
            		<div>
                		<strong><?php echo smartyTranslate(array('s'=>'Please wait a few seconds while the access keys are verified.','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong>
	               	</div>
	            </div>
	            <?php if (isset($_smarty_tpl->tpl_vars['keys_valid']->value)) {?>
	            <div class="alert alert-<?php if (!$_smarty_tpl->tpl_vars['keys_valid']->value) {?>danger<?php } else { ?>success<?php }?>" id="keysverification">
            		<div>
                		<strong>
                			<?php if (!$_smarty_tpl->tpl_vars['keys_valid']->value) {?>
                				<?php echo smartyTranslate(array('s'=>'The access keys are invalid.','mod'=>'amzpayments'),$_smarty_tpl);?>
                			
                			<?php } else { ?>
                				<?php echo smartyTranslate(array('s'=>'The access keys are valid.','mod'=>'amzpayments'),$_smarty_tpl);?>

                			<?php }?>
                		</strong>
	               	</div>
	            </div>
	            <?php }?>
	        </div>
			
			<div id="amzconnectform"></div>
			
			<div id="connecterrors">
            	<div class="alert alert-warning" id="waitforverification">
            		<div>
                		<strong><?php echo smartyTranslate(array('s'=>'Please wait a few seconds while the access keys are verified.','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong>
	               	</div>
	            </div>
            	<div class="alert alert-danger" id="jsonerror">
            		<div>
                		<strong><?php echo smartyTranslate(array('s'=>'There is an error in the JSON string.','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong> 
                		<?php echo smartyTranslate(array('s'=>'If you need help, please [1]contact our support[/1]','tags'=>array('<a onclick="jQuery(\'#amztabs a[href=#amzcontactus]\').tab(\'show\');">'),'mod'=>'amzpayments'),$_smarty_tpl);?>

	               	</div>
	            </div>
            	<div class="alert alert-danger" id="missingerror">
	               	<div>
	               		<strong><?php echo smartyTranslate(array('s'=>'The following information is missing: ','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong> <span id="missing_fields"></span><br />
                		<?php echo smartyTranslate(array('s'=>'If you need help, please [1]contact our support[/1]','tags'=>array('<a onclick="jQuery(\'#amztabs a[href=#amzcontactus]\').tab(\'show\');">'),'mod'=>'amzpayments'),$_smarty_tpl);?>

	               	</div>
				</div>
			</div> 		
			
			<div class="ipnurl">
				<p>
					<strong>
        	        	2. <?php echo smartyTranslate(array('s'=>'Add your Instant Payments Notification (IPN) URL to your account in Seller Central','mod'=>'amzpayments'),$_smarty_tpl);?>
 
						<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php echo smartyTranslate(array('s'=>'The IPN URL enables your store to receive payment notifications from Amazon Pay','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-info-circle" aria-hidden="true" style="color:forestgreen;"></i></span>
					</strong>	
				</p>			
				<p>
					<?php echo smartyTranslate(array('s'=>'Your Instant Payment Notification (IPN) URL:','mod'=>'amzpayments'),$_smarty_tpl);?>

					<input readonly type="text" width="60" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['productionMerchantIPNURL'],'htmlall','UTF-8');?>
" id="ipnlink">				
				</p>
    	        <div>
    	        	<p style="margin-left: 24px">
						<a style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal2"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See instructions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
	                    <a style="color:#FF9900;cursor: pointer;" id="showvideonotification" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>    	        	
    	        	</p>    	        	
	            	<div id="videonotification" style="width: 80%; clear: both">
    	        		<video controls="controls" style="max-width: 100%;">
							<source src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videodir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8');?>
/IPN<?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8'));?>
.mp4" type="video/webm" />
						</video>
					</div>	
        	        <ol type="a">
            	    	<li>
                			<?php echo smartyTranslate(array('s'=>'Copy your IPN URL to the clipboard','mod'=>'amzpayments'),$_smarty_tpl);?>
:
							<a class="btn clipper" data-clipboard-target="#ipnlink" style="color:#FF9900;cursor: pointer;" aria-hidden="true"><i class="fa fa-clipboard" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Click here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>                        
						</li>
						<li>
							<a style="cursor: pointer;" target="_blank" href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU"><?php echo smartyTranslate(array('s'=>'Sign in to your account on Seller Central, in a new browser window','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
						</li>
						<li>
            	            <?php echo smartyTranslate(array('s'=>'Paste the URL into the [1]Merchant URL[/1] field','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
 
						</li>
        	        </ol>
				</div>		
			</div>
			
			<div class="originandallowed">
				<p>
					<strong>
        	        	3. <?php echo smartyTranslate(array('s'=>'Add your Allowed JavaScript Origin to your account in Seller Central','mod'=>'amzpayments'),$_smarty_tpl);?>
 
						<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php echo smartyTranslate(array('s'=>'Please enter these URLs in your Amazon Pay account so that Login with Amazon SDK for JavaScript can be authorized to run on your website','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-info-circle" aria-hidden="true" style="color:forestgreen;"></i></span>
					</strong>	
				</p>			
				<p>
					<?php echo smartyTranslate(array('s'=>'Your Allowed JavaScript Origin:','mod'=>'amzpayments'),$_smarty_tpl);?>

					<input readonly type="text" width="60" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['simple_path']->value['allowedLoginDomains'],'htmlall','UTF-8');?>
" id="whitelisturl">				
				</p>
    	        <div>
    	        	<p style="margin-left: 24px">
						<a style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal4"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See instructions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
	                    <a style="color:#FF9900;cursor: pointer;" id="showvideojavascriptorigins" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>	      	        	
    	        	</p>				                       
				    <div id="videojavascriptorigins" style="width: 80%; clear: both">
    	        		<video controls="controls" style="max-width: 100%;">
							<source src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videodir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8');?>
/JavaScriptOrigin<?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8'));?>
.mp4" type="video/webm" />
						</video>
					</div>	
        	        <ol type="a">
            	    	<li>
                			<?php echo smartyTranslate(array('s'=>'Copy the URL to the clipboard:','mod'=>'amzpayments'),$_smarty_tpl);?>

							<a class="btn clipper" data-clipboard-target="#whitelisturl" style="color:#FF9900;cursor: pointer;" aria-hidden="true"><i class="fa fa-clipboard" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Click here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>                        
						</li>
						<li>
							<a style="cursor: pointer;" target="_blank" href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU"><?php echo smartyTranslate(array('s'=>'Sign in to your account on Seller Central, in a new browser window','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
						</li>
						<li>
            	            <?php echo smartyTranslate(array('s'=>'Paste the URL into the [1]Allowed JavaScript Origins[/1] field.','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
 			
						</li>
        	        </ol>
				</div>
				
				<?php $_smarty_tpl->tpl_vars['aru_counter'] = new Smarty_variable(1, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['aru'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aru']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allowed_return_url_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aru']->key => $_smarty_tpl->tpl_vars['aru']->value) {
$_smarty_tpl->tpl_vars['aru']->_loop = true;
?>
					<p>
						<?php echo smartyTranslate(array('s'=>'Your %s. allowed return URL','sprintf'=>$_smarty_tpl->tpl_vars['aru_counter']->value,'mod'=>'amzpayments'),$_smarty_tpl);?>
:
						<input readonly type="text" width="60" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru']->value,'htmlall','UTF-8');?>
" id="aru_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru_counter']->value,'htmlall','UTF-8');?>
">				
					</p>
	    	        <div>
	    	        	<p style="margin-left: 24px">
							<a style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal5"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See instructions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
	                		<a style="color:#FF9900;cursor: pointer;" class="showvideoreturnurls" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>	 	    	        	
	    	        	</p>
						<div class="videoreturnurls" style="width: 80%; clear: both">
    	        			<video controls="controls" style="max-width: 100%;">
								<source src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videodir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8');?>
/ReturnURLs<?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8'));?>
.mp4" type="video/webm" />
							</video>
						</div>   
    	    	        <ol type="a">
        	    	    	<li>
            	    			<?php echo smartyTranslate(array('s'=>'Copy the URL to the clipboard:','mod'=>'amzpayments'),$_smarty_tpl);?>

								<a class="btn clipper" data-clipboard-target="#aru_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru_counter']->value,'htmlall','UTF-8');?>
" style="color:#FF9900;cursor: pointer;" aria-hidden="true"><i class="fa fa-clipboard" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Click here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>                        
							</li>
							<li>
								<a style="cursor: pointer;" target="_blank" href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU"><?php echo smartyTranslate(array('s'=>'Sign in to your account on Seller Central, in a new browser window','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
							</li>
							<li>
        	    	            <?php echo smartyTranslate(array('s'=>'Paste the URL into the [1]Allowed Return URLs[/1] field.','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
 
							</li>
        	        	</ol>
					</div>				
					<?php $_smarty_tpl->tpl_vars['aru_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['aru_counter']->value+1, null, 0);?>
				<?php } ?>
				<?php  $_smarty_tpl->tpl_vars['aru'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aru']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allowed_return_url_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aru']->key => $_smarty_tpl->tpl_vars['aru']->value) {
$_smarty_tpl->tpl_vars['aru']->_loop = true;
?>
					<p>
						<?php echo smartyTranslate(array('s'=>'Your %s. allowed return URL','sprintf'=>$_smarty_tpl->tpl_vars['aru_counter']->value,'mod'=>'amzpayments'),$_smarty_tpl);?>
:
						<input readonly type="text" width="60" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru']->value,'htmlall','UTF-8');?>
" id="aru_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru_counter']->value,'htmlall','UTF-8');?>
">				
					</p>
	    	        <div>
	    	        	<p style="margin-left: 24px">
							<a style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal5"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See instructions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
	                		<a style="color:#FF9900;cursor: pointer;" class="showvideoreturnurls" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>	  	    	        	
	    	        	</p>
						<div class="videoreturnurls" style="width: 80%; clear: both">
    	        			<video controls="controls" style="max-width: 100%;">
								<source src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videodir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8');?>
/ReturnURLs<?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8'));?>
.mp4" type="video/webm" />
							</video>
						</div>                   	    	            
    	    	        <ol type="a">
        	    	    	<li>
            	    			<?php echo smartyTranslate(array('s'=>'Copy the URL to the clipboard:','mod'=>'amzpayments'),$_smarty_tpl);?>

								<a class="btn clipper" data-clipboard-target="#aru_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru_counter']->value,'htmlall','UTF-8');?>
" style="color:#FF9900;cursor: pointer;" aria-hidden="true"><i class="fa fa-clipboard" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Click here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>                        
							</li>
							<li>
								<a style="cursor: pointer;" target="_blank" href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU"><?php echo smartyTranslate(array('s'=>'Sign in to your account on Seller Central, in a new browser window','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
							</li>
							<li>
        	    	            <?php echo smartyTranslate(array('s'=>'Paste the URL into the [1]Allowed Return URLs[/1] field.','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>

							</li>
        	        	</ol>
					</div>				
					<?php $_smarty_tpl->tpl_vars['aru_counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['aru_counter']->value+1, null, 0);?>
				<?php } ?> 
			</div>        
			
			<div class="validationcheck">
				<p>
					<strong>
        	        	4. <?php echo smartyTranslate(array('s'=>'Check if your Amazon Payments account has been verified','mod'=>'amzpayments'),$_smarty_tpl);?>
 
					</strong>	
				</p>
				
				<?php if (isset($_smarty_tpl->tpl_vars['kyc_passed']->value)&&$_smarty_tpl->tpl_vars['kyc_passed']->value==1) {?>
            		<div class="alert alert-success">
                		<strong><?php echo smartyTranslate(array('s'=>'Your account has been validated.','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong> 
	                	<a style="cursor: pointer;" onclick="jQuery('#amztabs a[href=#amzconfiguration]').tab('show');"><?php echo smartyTranslate(array('s'=>'Configure and activate the Amazon Pay plugin.','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
					</div>
				<?php } else { ?>				
 	   	        	<div>
 	   	        		<p style="margin-left: 24px"> 	   	        		
							<a style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal6"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See instructions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>	
							<a style="color:#FF9900;cursor: pointer;" class="showvalidationnotificationvideo" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>	
 	   	        		</p>
 	   	        		<div class="validationnotificationvideo" style="width: 80%; clear: both">
    	        			<video controls="controls" style="max-width: 100%;">
								<source src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videodir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8');?>
/Notifications<?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8'));?>
.mp4" type="video/webm" />
							</video>
						</div>
    	    	        <ul>
        	    	    	<li>
            	    			<?php echo smartyTranslate(array('s'=>'After you enter all required information, Amazon Payments will kick off the account verification.','mod'=>'amzpayments'),$_smarty_tpl);?>
							                       
							</li>
            	    		<li>
                				<?php echo smartyTranslate(array('s'=>'Check your email regularly. If Amazon Payments needs additional information from you to proceed with the verification, you will receive a notification and an email.','mod'=>'amzpayments'),$_smarty_tpl);?>
							                       
							</li>
            	    		<li>
                				<?php echo smartyTranslate(array('s'=>'Notifications are also stored in your account in Seller Central. To view them in Seller Central, click [1]Performance[/1], and then click [2]Performance Notifications[/2].','tags'=>array('<strong>','<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
							                       
							</li>
        	    	    </ul>
					</div>	
					<a class="btn btn-warning btn-sm" target="_blank" href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU">
    	            	<strong><?php echo smartyTranslate(array('s'=>'Check your Amazon Payments account notifications','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong>
					</a>		
				<?php }?>
			</div>
			
			
		</div>
		<div id="amzconfiguration" class="tab-pane">
			<?php if ($_smarty_tpl->tpl_vars['no_ssl']->value) {?>
				<div class="alert alert-warning" role="alert">
					<strong><?php echo smartyTranslate(array('s'=>'Warning!','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong> &nbsp;<?php echo smartyTranslate(array('s'=>'You don’t have any active SSL certificate installed. To use Amazon Pay on your website you need a SSL certificate installed.','mod'=>'amzpayments'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['kyc_passed']->value)&&$_smarty_tpl->tpl_vars['kyc_passed']->value==1) {?>
			<?php } else { ?>
				<div class="alert alert-warning" role="alert">
					<strong><?php echo smartyTranslate(array('s'=>'Warning!','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong> &nbsp;<?php echo smartyTranslate(array('s'=>'Your Amazon Pay account has not been validated. Please check your performance notifications to know what information has to be provided.','mod'=>'amzpayments'),$_smarty_tpl);?>
.
					<a style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal6"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See instructions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
					<a style="color:#FF9900;cursor: pointer;" class="showvalidationnotificationvideo2" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>		
				</div>			
 	   	        <div class="validationnotificationvideo2" style="width: 80%; clear: both">
    	        	<video controls="controls" style="max-width: 100%;">
						<source src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['videodir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8');?>
/Notifications<?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'html','UTF-8'));?>
.mp4" type="video/webm" />
					</video>
				</div> 
			<?php }?>
		
			<div id="advancedconfig">
             	<button id="restoreconfig" class="btn btn-warning btn-sm" style="margin:10px;" type="button" aria-expanded="false" aria-controls="collapseExample" onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Really reset to default values?','mod'=>'amzpayments'),$_smarty_tpl);?>
')) { location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['reset_link']->value,'htmlall','UTF-8');?>
'; }">
					<strong><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Restore Default Settings','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong>
				</button>
                <a style="cursor: pointer;" target="_blank" href="https://pay.amazon.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/help/202137100"><?php echo smartyTranslate(array('s'=>'Click here for more information on advanced configuration','mod'=>'amzpayments'),$_smarty_tpl);?>
</a></p>
                
				<div id="returnedurl">
					<a style="cursor: pointer;" target="_blank" href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU">
						<?php echo smartyTranslate(array('s'=>'Enter these URLs in your Amazon Pay account','mod'=>'amzpayments'),$_smarty_tpl);?>

					</a>
					<a style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal2"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See instructions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
					<a style="color:#FF9900;cursor: pointer;" id="showvideonotification" title="<?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'Watch our video','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
					<br />
					<?php  $_smarty_tpl->tpl_vars['aru'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aru']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allowed_return_url_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aru']->key => $_smarty_tpl->tpl_vars['aru']->value) {
$_smarty_tpl->tpl_vars['aru']->_loop = true;
?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru']->value,'htmlall','UTF-8');?>
<br />		
					<?php } ?>
					<?php  $_smarty_tpl->tpl_vars['aru'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aru']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allowed_return_url_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aru']->key => $_smarty_tpl->tpl_vars['aru']->value) {
$_smarty_tpl->tpl_vars['aru']->_loop = true;
?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['aru']->value,'htmlall','UTF-8');?>
<br />		
					<?php } ?>
				</div>
				
				<div id="grouping_states" style="display: none">
					<div id="execution_states" class="grouping"><?php echo smartyTranslate(array('s'=>'Payment transaction execution','mod'=>'amzpayments'),$_smarty_tpl);?>
</div>
					<div id="payment_states" class="grouping"><?php echo smartyTranslate(array('s'=>'Payment transaction status','mod'=>'amzpayments'),$_smarty_tpl);?>
</div>
					<div id="email_state" class="grouping"><?php echo smartyTranslate(array('s'=>'Automatic email','mod'=>'amzpayments'),$_smarty_tpl);?>
</div>
					<div id="amazon_notification" class="grouping"><?php echo smartyTranslate(array('s'=>'Payment status updates','mod'=>'amzpayments'),$_smarty_tpl);?>
</div>
				</div>

             	<button id="restorehooks" class="btn btn-warning btn-sm" style="margin:10px 10px 10px 0px;" type="button" aria-expanded="false" aria-controls="collapseExample" onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Do you confirm?','mod'=>'amzpayments'),$_smarty_tpl);?>
')) { location.href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hook_reset_link']->value,'htmlall','UTF-8');?>
'; }">
					<strong><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Set Amazon Pay as first payment method','mod'=>'amzpayments'),$_smarty_tpl);?>
</strong>
				</button>
					
			</div>
			<div class="text-right">
				<hr />
				<button type="submit" value="1" name="submitAmzpaymentsModule" class="btn btn-default">
					<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'amzpayments'),$_smarty_tpl);?>

				</button>
			</div>			
		</div>
		<div id="amzpromote" class="tab-pane">
		
			<div id="promobanners">
				<?php  $_smarty_tpl->tpl_vars['bannerset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bannerset']->_loop = false;
 $_smarty_tpl->tpl_vars['settyp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bannerset']->key => $_smarty_tpl->tpl_vars['bannerset']->value) {
$_smarty_tpl->tpl_vars['bannerset']->_loop = true;
 $_smarty_tpl->tpl_vars['settyp']->value = $_smarty_tpl->tpl_vars['bannerset']->key;
?>
					<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_smarty_tpl->tpl_vars['bannertyp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bannerset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['bannertyp']->value = $_smarty_tpl->tpl_vars['banner']->key;
?>
						<div id="banner_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['settyp']->value,'htmlall','UTF-8');?>
_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['bannertyp']->value,'htmlall','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['banner']->value,'htmlall','UTF-8');?>
" /></div>
					<?php } ?>				
				<?php } ?>
			</div>
		
			<p>
				<?php echo smartyTranslate(array('s'=>'You can integrate the "Login with Amazon"-Button at any part of your template. Just use the following HTML-Code, but be aware to always (!) use a unique value for the attribute "id":','mod'=>'amzpayments'),$_smarty_tpl);?>

			</p>
			<code> &lt;div id=&quot;&quot; class=&quot;amazonLoginWr&quot;&gt;&lt;/div&gt; </code>
			
			<div class="text-right">
				<hr />
				<button type="submit" value="1" name="submitAmzpaymentsModule" class="btn btn-default">
					<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'amzpayments'),$_smarty_tpl);?>

				</button>
			</div>
			
		</div>
		<div id="amzcontactus" class="tab-pane">
			<p>
				<?php echo smartyTranslate(array('s'=>'Don\'t have an Amazon Pay account?','mod'=>'amzpayments'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['new_customer_link']->value,'htmlall','UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Click here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a><br>
				<br>
				<b><?php echo smartyTranslate(array('s'=>'Already have an Amazon Pay account?','mod'=>'amzpayments'),$_smarty_tpl);?>
</b> <a href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU" target="_blank"><?php echo smartyTranslate(array('s'=>'Click here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a> 
				<i style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal8"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See how to do it','mod'=>'amzpayments'),$_smarty_tpl);?>
</i>
				<br>
				<?php echo smartyTranslate(array('s'=>'Merchant support might ask you to provide your shop’s log files. To download your log files, ','mod'=>'amzpayments'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['log_url']->value,'htmlall','UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'click here','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>. <br> 			
			</p>
			<p class="amz_illustration">
				<img src="https://m.media-amazon.com/images/G/01/EPSDocumentation/AmazonPay/Prestashop/img/AmazonPayContactUs.jpg" />
			</p>
		</div>
		<div id="amzfaq" class="tab-pane">
			<p>
				<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['faq_link']->value,'htmlall','UTF-8');?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Frequently asked questions','mod'=>'amzpayments'),$_smarty_tpl);?>
</a>
			</p>
			<p class="amz_illustration">
				<img src="https://m.media-amazon.com/images/G/01/EPSDocumentation/AmazonPay/Prestashop/img/AmazonPayFAQ.jpg" />
			</p>
		</div>
	</div>
</div>

<div id="help-addon-notifications" style="display:none;"><i style="color:#FF9900;cursor: pointer;" aria-hidden="true" data-toggle="modal" data-target="#myModal2"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo smartyTranslate(array('s'=>'See how to do it','mod'=>'amzpayments'),$_smarty_tpl);?>
</i></a></div>

<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'How to copy your access keys','mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/SelectYourKey.jpg" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal1a">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Import your access keys','mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/ImportYourKey.jpg" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal2">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Enter the link to receive notifications','mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/CopyIPN.jpg" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal3">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'How to login with a test account','mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/Login.png" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal4">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Paste the URL into the [1]Allowed JavaScript Origins[/1] field.','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/CopyURLLoginAuthorizedOrigin.jpg" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal5">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Paste the URL into the [1]Allowed Return URLs[/1] field.','tags'=>array('<strong>'),'mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/CopyURLLoginRedirection.jpg" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal6">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Check your Amazon Payments account notifications','mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/Notifications.jpg" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal8">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:lightgray;">
				<h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'amzpayments'),$_smarty_tpl);?>
</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8');?>
/ContactUs.jpg" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">X</button>
			</div>
		</div>
	</div>
</div>

</form>
</div>

<div class="panel" id="amzVersionChecker">
	<div class="panel-heading">
		<i class="icon-cogs"></i>
		<?php echo smartyTranslate(array('s'=>'Version-Checker','mod'=>'amzpayments'),$_smarty_tpl);?>

	</div>
	<div class="row">
		<div class="col-xs-12">
			<p style="text-align: center" id="versionCheck">
				<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(@constant('_PS_BASE_URL_'),'htmlall','UTF-8');?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(@constant('__PS_BASE_URI__'),'htmlall','UTF-8');?>
modules/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_name']->value,'htmlall','UTF-8');?>
/views/img/loading_indicator.gif" />
				<br /><br />
				<?php echo smartyTranslate(array('s'=>'We check if there is a new version of the plugin available.','mod'=>'amzpayments'),$_smarty_tpl);?>

				<br /><br />
			</p>
			<p style="text-align: center" id="versionCheckResult">
				<?php echo smartyTranslate(array('s'=>'Your version: ','mod'=>'amzpayments'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_version']->value,'htmlall','UTF-8');?>
</strong>
				<br /><br />
			</p>			
		</div>
	</div>
</div>

<script language="javascript">
	var kyc_passed = '<?php if (isset($_smarty_tpl->tpl_vars['kyc_passed']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['kyc_passed']->value,'htmlall','UTF-8');?>
<?php } else { ?>-1<?php }?>';
	var after_reset = '<?php if (isset($_smarty_tpl->tpl_vars['after_reset']->value)) {?>1<?php } else { ?>0<?php }?>';
	
	$(document).ready(function() {
		if (after_reset == '1') {
			$('#amztabs a[href=#amzconfiguration]').tab('show');			
		} else if (kyc_passed == '0') {
			$('#amztabs a[href=#amzconnect]').tab('show');
		} else if (kyc_passed == '1') {
			$('#amztabs a[href=#amzconfiguration]').tab('show');	
		}
		$.post("../modules/amzpayments/ajax.php",
		{
			action: "versionCheck",
			asv: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_version']->value,'htmlall','UTF-8');?>
",
			psv: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(@constant('_PS_VERSION_'),'htmlall','UTF-8');?>
",
			ref: location.host
		}, 
		function(data) {	
			if (data.newversion == 1) {
				$("#versionCheckResult").append("<?php echo smartyTranslate(array('s'=>'There is a new version available: ','mod'=>'amzpayments'),$_smarty_tpl);?>
<strong>" + data.newversion_number + "</strong><br /><br /><a href=\"http://www.patworx.de/Amazon-Advanced-Payment-APIs/PrestaShop\" target=\"_blank\">&gt; Download</a>");
			} else {
				$("#versionCheckResult").append("<?php echo smartyTranslate(array('s'=>'Everything is fine - you are using the latest version','mod'=>'amzpayments'),$_smarty_tpl);?>
");
			}
			$("#versionCheck").hide();
		}, "json"
		);
	});
	
</script>
<?php }} ?>
