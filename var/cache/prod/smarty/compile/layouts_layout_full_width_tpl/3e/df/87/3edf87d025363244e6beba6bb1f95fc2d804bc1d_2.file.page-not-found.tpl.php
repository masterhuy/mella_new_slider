<?php
/* Smarty version 3.1.33, created on 2019-05-22 03:40:22
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\errors\page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce4fce6df9339_07289692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3edf87d025363244e6beba6bb1f95fc2d804bc1d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\errors\\page-not-found.tpl',
      1 => 1557212133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce4fce6df9339_07289692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-5 col-md-5 col-sm-12 col-xs-12 text-left">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/jms_mella/assets/img/error.png">
            <p class="text-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page not be found','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
            <p class="text-2">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We are really sorry, but the page you requested is missing..
                Perhaps searching again can help. Or back to','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

                <a class="back-to-home" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'home page','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
            </p>
            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2604304785ce4fce6df1639_64485859', 'search');
?>

        
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8610465535ce4fce6df54b7_63042857', 'hook_not_found');
?>

        </div>
        <div class="layout-column col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
    </div>
</section>
<?php }
/* {block 'search'} */
class Block_2604304785ce4fce6df1639_64485859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_2604304785ce4fce6df1639_64485859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_8610465535ce4fce6df54b7_63042857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_8610465535ce4fce6df54b7_63042857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_not_found'} */
}
