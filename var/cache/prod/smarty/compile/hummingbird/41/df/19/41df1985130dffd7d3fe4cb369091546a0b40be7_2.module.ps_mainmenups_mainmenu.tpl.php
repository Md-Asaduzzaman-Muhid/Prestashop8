<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'module:ps_mainmenups_mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde2097ebcc9_48041432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenups_mainmenu.tpl',
      1 => 1707474138,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde2097ebcc9_48041432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'desktopMenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\var\\cache\\prod\\smarty\\compile\\hummingbird\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_desktopMenu_369435265cde2097ceb47_54127879',
  ),
  'mobileMenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\var\\cache\\prod\\smarty\\compile\\hummingbird\\41\\df\\19\\41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.ps_mainmenups_mainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_mobileMenu_369435265cde2097ceb47_54127879',
  ),
));
?>



<div class="main-menu col-xl col-auto d-flex align-items-center">
  <div class="d-none d-xl-block position-static js-menu-desktop h-100">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'desktopMenu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

  </div>

  <div class="header-block d-xl-none">
    <a
      class="header-block__action-btn"
      href="#"
      role="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#mobileMenu"
      aria-controls="mobileMenu"
    >
      <span class="material-icons header-block__icon">menu</span>
    </a>
  </div>
</div>

<div
  class="main-menu__offcanvas offcanvas offcanvas-start js-menu-canvas"
  tabindex="-1"
  id="mobileMenu"
  aria-labelledby="mobileMenuLabel"
>
  <div class="offcanvas-header">
    <div class="main-menu__back-button">
      <button class="btn btn-unstyle d-none js-back-button" type="button">
        <span class="material-icons rtl-flip">chevron_left</span>
        <span class="js-menu-back-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      </button>
    </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="main-menu__mobile">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobileMenu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

  </div>

  <div class="main-menu__additionnals offcanvas-body">
    <div class="main-menu__selects row">
      <div id="_mobile_currency_selector" class="col-auto"></div>
      <div id="_mobile_language_selector" class="col-auto"></div>
    </div>
    <div id="_mobile_contact_link"></div>
  </div>
</div>
<?php }
/* smarty_template_function_desktopMenu_369435265cde2097ceb47_54127879 */
if (!function_exists('smarty_template_function_desktopMenu_369435265cde2097ceb47_54127879')) {
function smarty_template_function_desktopMenu_369435265cde2097ceb47_54127879(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
    <ul
      <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>id="top-menu"<?php }?>
      class="<?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>main-menu__tree h-100<?php } elseif ($_smarty_tpl->tpl_vars['depth']->value === 1) {?>row row-cols-4 gy-3<?php } else { ?>submenu<?php }?>"
      data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
      <li
        class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> main-menu__tree__item d-flex align-items-center h-100<?php }?>"
        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php if ($_smarty_tpl->tpl_vars['depth']->value > 1 && smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
          <div class="dropdown dropend">
        <?php }?>
          <a
            class="main-menu__tree__link<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?> dropdown-toggle<?php }
if ($_smarty_tpl->tpl_vars['depth']->value > 0) {?> dropdown-item<?php }?>"
            href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
            data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?>target="_blank"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['depth']->value > 1 && smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
              data-bs-toggle="dropdown"
              <?php if ($_smarty_tpl->tpl_vars['depth']->value === 2) {?>data-bs-offset="0,-1"<?php } else { ?>data-bs-display="static"<?php }?>
            <?php }?>
          >
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>

          </a>
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['depth']->value !== 1) {?>
              <div class="<?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>menu-container shadow-sm js-sub-menu<?php }
if ($_smarty_tpl->tpl_vars['depth']->value > 1 && smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>dropdown-menu<?php }?>">
            <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>
                <div class="container">
              <?php }?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'desktopMenu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

              <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>
                </div>
              <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['depth']->value !== 1) {?>
              </div>
            <?php }?>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['depth']->value > 1 && smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
          </div>
        <?php }?>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }
}}
/*/ smarty_template_function_desktopMenu_369435265cde2097ceb47_54127879 */
/* smarty_template_function_mobileMenu_369435265cde2097ceb47_54127879 */
if (!function_exists('smarty_template_function_mobileMenu_369435265cde2097ceb47_54127879')) {
function smarty_template_function_mobileMenu_369435265cde2097ceb47_54127879(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php $_smarty_tpl->_assignInScope('children', array());?>
  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
    <nav
      class="menu menu--mobile<?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> menu--current js-menu-current<?php } else { ?> menu--child js-menu-child<?php }?>"
      <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>id="menu-mobile"<?php } else { ?>data-parent-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent']->value['label'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['depth']->value > 1) {?>data-back-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['backTitle']->value, ENT_QUOTES, 'UTF-8');?>
" data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['expandId']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
      data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
      <ul class="menu__list">
        <?php if ($_smarty_tpl->tpl_vars['depth']->value >= 1) {?>
          <li class="main-menu__title h5"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
          <li
            class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current<?php }
if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?> menu--childrens<?php }?>"
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
"
          >
            <a
              class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>menu__link<?php }?>"
              href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
              data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
              <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?>target="_blank"<?php }?>
            >
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>

            </a>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                            <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
              <span class="main-menu__toggle-child js-menu-open-child" data-target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <span data-target="#top_sub_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <i class="material-icons rtl-flip">chevron_right</i>
                </span>
              </span>
            <?php }?>
          </li>
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['node']) ? $_smarty_tpl->tpl_vars['node']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['parent'] = $_smarty_tpl->tpl_vars['node']->value;
$_smarty_tpl->_assignInScope('node', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['node']) ? $_smarty_tpl->tpl_vars['node']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['expandId'] = $_smarty_tpl->tpl_vars['_expand_id']->value;
$_smarty_tpl->_assignInScope('node', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['children']) ? $_smarty_tpl->tpl_vars['children']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['node']->value;
$_smarty_tpl->_assignInScope('children', $_tmp_array);?>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </nav>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobileMenu', array('nodes'=>$_smarty_tpl->tpl_vars['child']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['child']->value['children'][0]['depth'],'parent'=>$_smarty_tpl->tpl_vars['child']->value,'backTitle'=>$_smarty_tpl->tpl_vars['child']->value['parent']['label'],'expandId'=>$_smarty_tpl->tpl_vars['child']->value['expandId']), true);?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}}
/*/ smarty_template_function_mobileMenu_369435265cde2097ceb47_54127879 */
}
