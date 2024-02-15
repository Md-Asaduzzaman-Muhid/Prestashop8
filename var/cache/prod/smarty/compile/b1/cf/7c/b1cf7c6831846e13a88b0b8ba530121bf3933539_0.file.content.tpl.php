<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:12:45
  from 'C:\xampp\htdocs\prestashop\Prestashop8\_admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde39d3d6ed1_19953902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1cf7c6831846e13a88b0b8ba530121bf3933539' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\_admin\\themes\\default\\template\\content.tpl',
      1 => 1707129386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde39d3d6ed1_19953902 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
