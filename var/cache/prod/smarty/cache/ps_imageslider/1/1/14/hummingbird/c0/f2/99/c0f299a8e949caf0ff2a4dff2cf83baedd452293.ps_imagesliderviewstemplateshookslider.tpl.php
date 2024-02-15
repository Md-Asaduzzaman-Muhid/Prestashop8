<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde209317b81_06082527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1707474138,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65cde209317b81_06082527 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="home-slider" class="ratio ratio-homeSlider">
    <div class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
                          <button type="button" data-bs-target="#home-slider .carousel" data-bs-slide-to="0" aria-label="Sample 1"
           class="active" aria-current="true" ></button>
                            <button type="button" data-bs-target="#home-slider .carousel" data-bs-slide-to="1" aria-label="Sample 2"
          ></button>
                            <button type="button" data-bs-target="#home-slider .carousel" data-bs-slide-to="2" aria-label="Sample 3"
          ></button>
                        </div>
      <div class="carousel-inner" role="listbox" aria-label="Pokaz slajdów">
                  <li class="carousel-item active" role="option"
            aria-hidden="false">
            <a class="carousel-link" href="https://www.prestashop-project.org">              <figure class="carousel-content">
                <img src="http://localhost/prestashop/Prestashop8/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1" loading="eager" width=1110 height=340>
                                  <figcaption class="carousel-caption caption">
                    <h2 class="display-1 text-uppercase">Sample 1</h2>
                    <div class="caption-description"><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                  </figcaption>
                              </figure>
            </a>          </li>
                  <li class="carousel-item" role="option"
            aria-hidden="true">
            <a class="carousel-link" href="https://www.prestashop-project.org">              <figure class="carousel-content">
                <img src="http://localhost/prestashop/Prestashop8/modules/ps_imageslider/images/sample-2.jpg" alt="sample-2" loading="lazy" width=1110 height=340>
                                  <figcaption class="carousel-caption caption">
                    <h2 class="display-1 text-uppercase">Sample 2</h2>
                    <div class="caption-description"><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                  </figcaption>
                              </figure>
            </a>          </li>
                  <li class="carousel-item" role="option"
            aria-hidden="true">
            <a class="carousel-link" href="https://www.prestashop-project.org">              <figure class="carousel-content">
                <img src="http://localhost/prestashop/Prestashop8/modules/ps_imageslider/images/sample-3.jpg" alt="sample-3" loading="lazy" width=1110 height=340>
                                  <figcaption class="carousel-caption caption">
                    <h2 class="display-1 text-uppercase">Sample 3</h2>
                    <div class="caption-description"><h3>EXCEPTEUR OCCAECAT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                  </figcaption>
                              </figure>
            </a>          </li>
              </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#home-slider .carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Poprzedni</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#home-slider .carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Następny</span>
      </button>
    </div>
  </div>
<?php }
}
