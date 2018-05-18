<?php /*%%SmartyHeaderCode:15480190125af9588a857709-24314903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1525861099,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '15480190125af9588a857709-24314903',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5afd4f5dd26250_29508511',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afd4f5dd26250_29508511')) {function content_5afd4f5dd26250_29508511($_smarty_tpl) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://test">
            <figure>
              <img src="http://127.0.0.1/prestashop/modules/ps_imageslider/images/02bfd7e4b97137aa93a12aa2f0f139cfd3fb9e1a_Rizzoli_image1_414_4.jpg" alt="">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://test">
            <figure>
              <img src="http://127.0.0.1/prestashop/modules/ps_imageslider/images/768f70f700289775cd010dec221d5718aa0b5550_slider3 2018.jpg" alt="">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://test">
            <figure>
              <img src="http://127.0.0.1/prestashop/modules/ps_imageslider/images/fb059e623cd9dd5b200d8ceb6e4fc62d33da0d47_taleskingdom-minisite-slider-books.jpg" alt="">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Carousel buttons">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php }} ?>
