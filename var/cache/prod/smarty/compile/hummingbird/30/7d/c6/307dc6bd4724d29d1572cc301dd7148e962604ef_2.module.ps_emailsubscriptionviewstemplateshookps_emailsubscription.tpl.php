<?php
/* Smarty version 4.3.4, created on 2024-02-15 11:06:01
  from 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cde209846467_35659387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl',
      1 => 1707474138,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cde209846467_35659387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'email-subscription');?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
 px-0 py-4">
  <div class="container px-1">
    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__content row">
      <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__content__left col-md-5">
        <p id="block-newsletter-label-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get our latest news and special sales','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
      </div>

      <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__content__right col-md-7">
        <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
          <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__content__inputs inline-items">
            <input
              name="email"
              type="email"
              class="form-control"
              value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
              placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
              aria-labelledby="block-newsletter-label-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
"
              required
           >

            <input
              class="btn btn-primary"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
           >
          </div>

          <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__content__infos">
            <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
              <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
              <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

              </p>
            <?php }?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>


            <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

            <?php }?>
          </div>

          <input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" />
          <input type="hidden" name="action" value="0">
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
