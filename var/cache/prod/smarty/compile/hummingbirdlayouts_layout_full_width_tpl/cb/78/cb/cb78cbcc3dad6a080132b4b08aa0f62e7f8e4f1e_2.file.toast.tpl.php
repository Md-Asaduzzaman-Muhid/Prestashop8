<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\hummingbird\templates\components\toast.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde209a38749_14228785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb78cbcc3dad6a080132b4b08aa0f62e7f8e4f1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\hummingbird\\templates\\components\\toast.tpl',
      1 => 1707474138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde209a38749_14228785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'toast');?>

<template class="js-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
-template">
  <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
-body"></div>
      <button type="button" class="btn-close me-2 m-auto d-none" data-bs-dismiss="toast"></button>
    </div>
  </div>
</template>
<?php }
}
