<?php
/* Smarty version 3.1.33, created on 2019-05-17 05:10:18
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cde7a7a873772_05947018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fca9e34c3d476178e86ddf4dfdf6f330a24d546' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\customer\\authentication.tpl',
      1 => 1554265998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde7a7a873772_05947018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14125788185cde7a7a85fef4_73136684', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16878434035cde7a7a867bf4_93721807', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_14125788185cde7a7a85fef4_73136684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_14125788185cde7a7a85fef4_73136684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_14590814925cde7a7a86f8f8_61437920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_7702013365cde7a7a86ba75_41814729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <hr/>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14590814925cde7a7a86f8f8_61437920', 'display_after_login_form', $this->tplIndex);
?>

      <div class="no-account">
        <a class="" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_16878434035cde7a7a867bf4_93721807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_16878434035cde7a7a867bf4_93721807',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_7702013365cde7a7a86ba75_41814729',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_14590814925cde7a7a86f8f8_61437920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7702013365cde7a7a86ba75_41814729', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
