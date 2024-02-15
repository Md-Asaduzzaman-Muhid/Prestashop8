<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\hummingbird\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde2095e1282_67783286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '588c9f0d0c8caab2dc70062d38b2add864eaf4fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\hummingbird\\templates\\layouts\\layout-full-width.tpl',
      1 => 1707474138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde2095e1282_67783286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16088802765cde2095ddcc7_83744435', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block "container_class"} */
class Block_42421403465cde2095de280_01699330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
container<?php
}
}
/* {/block "container_class"} */
/* {block "left_column"} */
class Block_33766731165cde2095deaa6_88570404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_186441370465cde2095dfb57_16093701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_26263651265cde2095df1a1_11043295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="wrapper__content wrapper__content-full-width">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186441370465cde2095dfb57_16093701', "content", $this->tplIndex);
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_6151970865cde2095e0a30_31844599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "right_column"} */
/* {block 'content_columns'} */
class Block_16088802765cde2095ddcc7_83744435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_16088802765cde2095ddcc7_83744435',
  ),
  'container_class' => 
  array (
    0 => 'Block_42421403465cde2095de280_01699330',
  ),
  'left_column' => 
  array (
    0 => 'Block_33766731165cde2095deaa6_88570404',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_26263651265cde2095df1a1_11043295',
  ),
  'content' => 
  array (
    0 => 'Block_186441370465cde2095dfb57_16093701',
  ),
  'right_column' => 
  array (
    0 => 'Block_6151970865cde2095e0a30_31844599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42421403465cde2095de280_01699330', "container_class", $this->tplIndex);
?>
">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33766731165cde2095deaa6_88570404', "left_column", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26263651265cde2095df1a1_11043295', "content_wrapper", $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6151970865cde2095e0a30_31844599', "right_column", $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_columns'} */
}
