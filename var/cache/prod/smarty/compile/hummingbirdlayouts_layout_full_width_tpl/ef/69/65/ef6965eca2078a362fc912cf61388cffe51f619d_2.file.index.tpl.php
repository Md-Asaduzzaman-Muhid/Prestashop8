<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\hummingbird\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde2095cd513_67238007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef6965eca2078a362fc912cf61388cffe51f619d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\hummingbird\\templates\\index.tpl',
      1 => 1707474138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde2095cd513_67238007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28263471365cde2095c1b90_91483987', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47482832065cde2095c27b7_70416244', "content_columns");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_28263471365cde2095c1b90_91483987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_28263471365cde2095c1b90_91483987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_18061680465cde2095c2cf9_05137524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left_column"} */
/* {block 'page_title'} */
class Block_190969666565cde2095c4df5_55771589 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <header class="page-header">
                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
              </header>
            <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_28084402665cde2095c4911_42968855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190969666565cde2095c4df5_55771589', 'page_title', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_165649417265cde2095c9b74_31788748 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_133043784765cde2095ca4d0_60884431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_212263366765cde2095ca142_90591346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133043784765cde2095ca4d0_60884431', 'hook_home', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_64029110365cde2095c9725_45220340 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content page-home">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165649417265cde2095c9b74_31788748', 'page_content_top', $this->tplIndex);
?>

      
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212263366765cde2095ca142_90591346', 'page_content', $this->tplIndex);
?>

            </section>
          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_29649108565cde2095cb827_16974352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <!-- Footer content -->
              <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_103789173665cde2095cb496_82938469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29649108565cde2095cb827_16974352', 'page_footer', $this->tplIndex);
?>

            </footer>
          <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_26708397565cde2095c4320_77131280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- TODO INSIDE -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28084402665cde2095c4911_42968855', 'page_header_container', $this->tplIndex);
?>

      
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64029110365cde2095c9725_45220340', 'page_content_container', $this->tplIndex);
?>

      
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103789173665cde2095cb496_82938469', 'page_footer_container', $this->tplIndex);
?>

        <!-- TODO INSIDE -->
      <?php
}
}
/* {/block 'content'} */
/* {block "content_wrapper"} */
class Block_73696681865cde2095c3434_65370348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="wrapper__content">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26708397565cde2095c4320_77131280', 'content', $this->tplIndex);
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_47826676365cde2095ccc72_12391062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "right_column"} */
/* {block "content_columns"} */
class Block_47482832065cde2095c27b7_70416244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_47482832065cde2095c27b7_70416244',
  ),
  'left_column' => 
  array (
    0 => 'Block_18061680465cde2095c2cf9_05137524',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_73696681865cde2095c3434_65370348',
  ),
  'content' => 
  array (
    0 => 'Block_26708397565cde2095c4320_77131280',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_28084402665cde2095c4911_42968855',
  ),
  'page_title' => 
  array (
    0 => 'Block_190969666565cde2095c4df5_55771589',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_64029110365cde2095c9725_45220340',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_165649417265cde2095c9b74_31788748',
  ),
  'page_content' => 
  array (
    0 => 'Block_212263366765cde2095ca142_90591346',
  ),
  'hook_home' => 
  array (
    0 => 'Block_133043784765cde2095ca4d0_60884431',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_103789173665cde2095cb496_82938469',
  ),
  'page_footer' => 
  array (
    0 => 'Block_29649108565cde2095cb827_16974352',
  ),
  'right_column' => 
  array (
    0 => 'Block_47826676365cde2095ccc72_12391062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18061680465cde2095c2cf9_05137524', "left_column", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73696681865cde2095c3434_65370348', "content_wrapper", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47826676365cde2095ccc72_12391062', "right_column", $this->tplIndex);
?>

<?php
}
}
/* {/block "content_columns"} */
}
