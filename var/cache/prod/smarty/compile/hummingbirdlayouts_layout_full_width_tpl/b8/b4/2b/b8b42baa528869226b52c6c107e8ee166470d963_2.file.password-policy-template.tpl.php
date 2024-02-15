<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\hummingbird\templates\components\password-policy-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde209a491d1_22696853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b42baa528869226b52c6c107e8ee166470d963' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\hummingbird\\templates\\components\\password-policy-template.tpl',
      1 => 1707474138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde209a491d1_22696853 (Smarty_Internal_Template $_smarty_tpl) {
?>

<template id="password-feedback">
  <div
    class="password-strength-feedback d-none"
  >
    <div class="progress-container">
      <div class="progress mb-3">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" class="js-hint-password">
      <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'])) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'] ));?>

      <?php }?>
    <?php echo '</script'; ?>
>

    <div class="password-strength-text"></div>
    <div class="password-requirements">
      <p class="password-requirements-length" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a password between %s and %s characters','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="material-icons">check_circle</i>
        <span></span>
      </p>
      <p class="password-requirements-score" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum score must be: %s','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="material-icons">check_circle</i>
        <span></span>
      </p>
    </div>
  </div>
</template>
<?php }
}
