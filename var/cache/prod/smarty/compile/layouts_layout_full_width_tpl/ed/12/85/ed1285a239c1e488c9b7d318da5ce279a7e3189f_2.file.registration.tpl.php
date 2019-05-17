<?php
/* Smarty version 3.1.33, created on 2019-05-17 05:10:35
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\customer\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cde7a8b61dab5_09327054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1285a239c1e488c9b7d318da5ce279a7e3189f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\customer\\registration.tpl',
      1 => 1552292667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde7a8b61dab5_09327054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7719246605cde7a8b60e0b8_77749735', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13136958005cde7a8b615db3_57783466', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_7719246605cde7a8b60e0b8_77749735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_7719246605cde7a8b60e0b8_77749735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'register_form_container'} */
class Block_15618753285cde7a8b615db2_55528096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_top']->value;?>

      <section class="register-form">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in instead!','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</a></p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

      </section>
    <?php
}
}
/* {/block 'register_form_container'} */
/* {block 'page_content'} */
class Block_13136958005cde7a8b615db3_57783466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_13136958005cde7a8b615db3_57783466',
  ),
  'register_form_container' => 
  array (
    0 => 'Block_15618753285cde7a8b615db2_55528096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15618753285cde7a8b615db2_55528096', 'register_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
