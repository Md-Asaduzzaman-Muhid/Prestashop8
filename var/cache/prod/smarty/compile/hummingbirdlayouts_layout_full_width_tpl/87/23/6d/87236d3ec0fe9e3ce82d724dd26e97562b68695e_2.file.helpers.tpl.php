<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\hummingbird\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde20963a418_88252354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87236d3ec0fe9e3ce82d724dd26e97562b68695e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\hummingbird\\templates\\_partials\\helpers.tpl',
      1 => 1707474138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde20963a418_88252354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\var\\cache\\prod\\smarty\\compile\\hummingbirdlayouts_layout_full_width_tpl\\87\\23\\6d\\87236d3ec0fe9e3ce82d724dd26e97562b68695e_2.file.helpers.tpl.php',
    'uid' => '87236d3ec0fe9e3ce82d724dd26e97562b68695e',
    'call_name' => 'smarty_template_function_renderLogo_149524037265cde20960f4f5_27337615',
  ),
));
?>

<?php }
/* smarty_template_function_renderLogo_149524037265cde20960f4f5_27337615 */
if (!function_exists('smarty_template_function_renderLogo_149524037265cde20960f4f5_27337615')) {
function smarty_template_function_renderLogo_149524037265cde20960f4f5_27337615(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a class="navbar-brand d-block" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
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
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_149524037265cde20960f4f5_27337615 */
}
