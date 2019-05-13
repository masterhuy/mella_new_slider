<?php
/* Smarty version 3.1.33, created on 2019-05-13 00:49:20
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd8f750a66a39_40103240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22ecfa3c858a2fce13365785f0ea3cbd9a74d1ff' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\page.tpl',
      1 => 1554879014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd8f750a66a39_40103240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9736002085cd8f750a5ed33_49713037', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_19315112265cd8f750a62bb4_95257528 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20967950045cd8f750a62bb0_58190489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5992320675cd8f750a5ed35_99584259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content card card-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19315112265cd8f750a62bb4_95257528', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20967950045cd8f750a62bb0_58190489', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_10139556045cd8f750a66a39_91678820 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9736002085cd8f750a5ed33_49713037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9736002085cd8f750a5ed33_49713037',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5992320675cd8f750a5ed35_99584259',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19315112265cd8f750a62bb4_95257528',
  ),
  'page_content' => 
  array (
    0 => 'Block_20967950045cd8f750a62bb0_58190489',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10139556045cd8f750a66a39_91678820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5992320675cd8f750a5ed35_99584259', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10139556045cd8f750a66a39_91678820', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
