<?php
/* Smarty version 3.1.33, created on 2019-05-17 04:32:15
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cde718feed745_52671708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7adde1554f6c1e98f39909f4b02117c2c4e584d' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\errors\\not-found.tpl',
      1 => 1552292667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde718feed745_52671708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found"> 
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h4>
	<p class="small-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
	<div class="search-box">
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11533451965cde718fee5a34_85271070', 'search');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18454193475cde718fee98b4_27515898', 'hook_not_found');
?>

	</div>
</section>
<?php }
/* {block 'search'} */
class Block_11533451965cde718fee5a34_85271070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_11533451965cde718fee5a34_85271070',
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
class Block_18454193475cde718fee98b4_27515898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_18454193475cde718fee98b4_27515898',
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
