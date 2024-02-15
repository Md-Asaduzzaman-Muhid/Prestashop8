<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde2092db693_83112128',
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
  'includes' => 
  array (
  ),
),false)) {
function content_65cde2092db693_83112128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '19583951265cde209275ae0_85014593';
?>

<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
  <div id="home-slider" class="ratio ratio-homeSlider">
    <div class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <?php $_smarty_tpl->_assignInScope('count', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, NULL, 'homeslider', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['slide']->iteration = 0;
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
$_smarty_tpl->tpl_vars['slide']->iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index'];
$__foreach_slide_0_saved = $_smarty_tpl->tpl_vars['slide'];
?>
          <button type="button" data-bs-target="#home-slider .carousel" data-bs-slide-to="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] : null)) {?> class="active" aria-current="true" <?php }?>></button>
          <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
        <?php
$_smarty_tpl->tpl_vars['slide'] = $__foreach_slide_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <div class="carousel-inner" role="listbox" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carousel container','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, NULL, 'homeslider', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['slide']->iteration = 0;
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
$_smarty_tpl->tpl_vars['slide']->iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index'];
$__foreach_slide_1_saved = $_smarty_tpl->tpl_vars['slide'];
?>
          <li class="carousel-item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] : null)) {?> active<?php }?>" role="option"
            aria-hidden="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] : null)) {?>false<?php } else { ?>true<?php }?>">
            <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?><a class="carousel-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
              <figure class="carousel-content">
                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['slide']->iteration == 1) {?>loading="eager"<?php } else { ?>loading="lazy"<?php }?> <?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['slide']->value['size'],'"',''), ENT_QUOTES, 'UTF-8');?>
>
                <?php if ($_smarty_tpl->tpl_vars['slide']->value['title'] || $_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                  <figcaption class="carousel-caption caption">
                    <h2 class="display-1 text-uppercase"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                    <div class="caption-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
                  </figcaption>
                <?php }?>
              </figure>
            <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?></a><?php }?>
          </li>
        <?php
$_smarty_tpl->tpl_vars['slide'] = $__foreach_slide_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#home-slider .carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#home-slider .carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </button>
    </div>
  </div>
<?php }
}
}
