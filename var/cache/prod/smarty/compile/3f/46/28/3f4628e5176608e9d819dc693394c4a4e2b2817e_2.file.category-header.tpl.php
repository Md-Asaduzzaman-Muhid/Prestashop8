<?php
/* Smarty version 4.3.4, created on 2024-02-15 09:34:47
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\classic\templates\catalog\_partials\category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cdcca7d77723_18143710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4628e5176608e9d819dc693394c4a4e2b2817e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\classic\\templates\\catalog\\_partials\\category-header.tpl',
      1 => 1697808246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cdcca7d77723_18143710 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-header">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="block-category card card-block">
            <h1 class="h1"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
            <div class="block-category-inner">
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                    <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?>
                    <div class="category-cover">
                        <picture>
                            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" loading="lazy" width="141" height="180">
                        </picture>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
