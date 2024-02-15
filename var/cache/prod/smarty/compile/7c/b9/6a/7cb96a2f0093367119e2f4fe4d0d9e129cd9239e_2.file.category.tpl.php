<?php
/* Smarty version 4.3.4, created on 2024-02-15 09:34:47
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\classic\templates\catalog\_partials\miniatures\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cdcca7e02c54_57618911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cb96a2f0093367119e2f4fe4d0d9e129cd9239e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\category.tpl',
      1 => 1697808246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cdcca7e02c54_57618911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172326032165cdcca7dfac74_25955387', 'category_miniature_item');
?>

<?php }
/* {block 'category_miniature_item'} */
class Block_172326032165cdcca7dfac74_25955387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_miniature_item' => 
  array (
    0 => 'Block_172326032165cdcca7dfac74_25955387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="category-miniature">
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
      <picture>
        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['medium']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
        <img
          src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
          loading="lazy"
          width="250"
          height="250"
        >
      </picture>
    </a>

    <h1 class="h2">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </h1>

    <div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
  </section>
<?php
}
}
/* {/block 'category_miniature_item'} */
}
