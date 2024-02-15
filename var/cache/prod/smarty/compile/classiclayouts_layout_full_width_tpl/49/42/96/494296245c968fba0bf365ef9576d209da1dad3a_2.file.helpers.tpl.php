<?php
/* Smarty version 4.3.4, created on 2024-02-15 09:46:20
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cdcf5c58ae75_63782999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '494296245c968fba0bf365ef9576d209da1dad3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1697808246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cdcf5c58ae75_63782999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\49\\42\\96\\494296245c968fba0bf365ef9576d209da1dad3a_2.file.helpers.tpl.php',
    'uid' => '494296245c968fba0bf365ef9576d209da1dad3a',
    'call_name' => 'smarty_template_function_renderLogo_110124519765cdcf5c57e1a6_97779448',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_110124519765cdcf5c57e1a6_97779448 */
if (!function_exists('smarty_template_function_renderLogo_110124519765cdcf5c57e1a6_97779448')) {
function smarty_template_function_renderLogo_110124519765cdcf5c57e1a6_97779448(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_110124519765cdcf5c57e1a6_97779448 */
}
