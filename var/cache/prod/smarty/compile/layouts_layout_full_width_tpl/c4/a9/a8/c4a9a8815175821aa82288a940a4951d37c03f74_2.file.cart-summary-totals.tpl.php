<?php
/* Smarty version 3.1.33, created on 2019-05-17 05:12:53
  from 'D:\xamppp\htdocs\jms_mella\themes\jms_mella\templates\checkout\_partials\cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cde7b15409f84_40811691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4a9a8815175821aa82288a940a4951d37c03f74' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_mella\\themes\\jms_mella\\templates\\checkout\\_partials\\cart-summary-totals.tpl',
      1 => 1552292667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde7b15409f84_40811691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18214715795cde7b15402283_58320709', 'cart_summary_total');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12666077905cde7b15406106_91281374', 'cart_summary_tax');
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
class Block_18214715795cde7b15402283_58320709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
    0 => 'Block_18214715795cde7b15402283_58320709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value pull-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
class Block_12666077905cde7b15406106_91281374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
    0 => 'Block_12666077905cde7b15406106_91281374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub pull-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
