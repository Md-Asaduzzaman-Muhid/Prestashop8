<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:05:47
  from 'C:\xampp\htdocs\prestashop\Prestashop8\_admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde1fb545038_73144934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a397c7073d7f565ce11088ab88304d3b3eefceda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\_admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1707129386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde1fb545038_73144934 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
