<?php
/* Smarty version 4.3.4, created on 2024-02-15 09:34:48
  from 'C:\xampp\htdocs\prestashop\Prestashop8\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cdcca8b7bea3_41174186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22d3bf0b18bcbfd459afca3f5063c90842696e2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\Prestashop8\\themes\\classic\\templates\\index.tpl',
      1 => 1697808246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cdcca8b7bea3_41174186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53170020265cdcca8b79323_04744185', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_62574848765cdcca8b79a55_01546373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_198868257065cdcca8b7a721_86457254 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2195775665cdcca8b7a255_02327557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198868257065cdcca8b7a721_86457254', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_53170020265cdcca8b79323_04744185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_53170020265cdcca8b79323_04744185',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_62574848765cdcca8b79a55_01546373',
  ),
  'page_content' => 
  array (
    0 => 'Block_2195775665cdcca8b7a255_02327557',
  ),
  'hook_home' => 
  array (
    0 => 'Block_198868257065cdcca8b7a721_86457254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62574848765cdcca8b79a55_01546373', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2195775665cdcca8b7a255_02327557', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
