<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'module:ps_customtextps_customtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde209415168_01305766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:ps_customtextps_customtext.tpl',
      1 => 1707474138,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde209415168_01305766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '194531914765cde209412f85_30959865';
?>

<div id="custom-text">
  <div class="container">
    <div class="custom-text__content rich-text">
      <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

    </div>
  </div>
</div>
<?php }
}
