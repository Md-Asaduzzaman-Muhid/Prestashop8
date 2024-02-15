<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\hummingbird\templates\_partials\preload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde20967cea3_47851754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '683ac3698eea97fc01f548558de1979bfd393a55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\hummingbird\\templates\\_partials\\preload.tpl',
      1 => 1707474138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde20967cea3_47851754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('themeDir', _PS_THEME_DIR_);
$_smarty_tpl->_assignInScope('preloadFilePath', ((string)$_smarty_tpl->tpl_vars['themeDir']->value)."assets/preload.html");
$_smarty_tpl->_assignInScope('assetsUrl', $_smarty_tpl->tpl_vars['urls']->value['theme_assets']);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['preloadFilePath']->value)) {?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "preloadBlock", null, null);
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['preloadFilePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'preloadBlock'),'href="../',"href=\"".((string)$_smarty_tpl->tpl_vars['assetsUrl']->value));?>

<?php }
}
}
