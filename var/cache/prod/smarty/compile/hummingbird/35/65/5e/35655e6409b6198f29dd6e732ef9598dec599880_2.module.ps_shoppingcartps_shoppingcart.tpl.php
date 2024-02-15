<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde20979f8b2_43452356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1707474138,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde20979f8b2_43452356 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart">
  <div class="header-block blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>header-block--active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
      <a class="header-block__action-btn" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php } else { ?>
      <span class="header-block__action-btn">
    <?php }?>

    <i class="material-icons header-block__icon" aria-hidden="true">shopping_cart</i>
    <span class="d-none d-md-flex header-block__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
    <span class="header-block__badge"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
      </a>
    <?php } else { ?>
      </span>
    <?php }?>
  </div>
</div>
<?php }
}
