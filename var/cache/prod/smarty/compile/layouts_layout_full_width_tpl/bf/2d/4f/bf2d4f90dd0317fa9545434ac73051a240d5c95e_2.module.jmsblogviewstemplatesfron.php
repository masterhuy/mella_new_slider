<?php
/* Smarty version 3.1.33, created on 2019-05-17 05:54:07
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cde84bfd4b448_34492181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2d4f90dd0317fa9545434ac73051a240d5c95e' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1555052343,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde84bfd4b448_34492181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9627112615cde84bfcfd230_98613315', 'head_seo_title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15244884385cde84bfd04f37_27137796', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'head_seo_title'} */
class Block_9627112615cde84bfcfd230_98613315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_title' => 
  array (
    0 => 'Block_9627112615cde84bfcfd230_98613315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['current_category']->value['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block "page_content"} */
class Block_15244884385cde84bfd04f37_27137796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_15244884385cde84bfd04f37_27137796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_mella\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_category']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && $_smarty_tpl->tpl_vars['posts']->value) {?>		
	<div class="cat-post-list more-columns four-column">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
			<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>				
			
			<div class="item col-sm-6 col-md-3 col-lg-3 col-xs-12">
				<div class="blog-post">
					<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
						<div class="post-thumb">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8');?>

						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
						<div class="post-thumb">
							<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8');?>
">
								<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
							</a>
						</div>
					<?php }?>
					<div class="post-info">
						<h4 class="post-title">
							<a class="blog-list-title" href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Images','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
						</h4>
						<ul class="post-meta">
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
								<li>
									<span>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 
									</span>
									<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
">
										<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

									</a>
								</li>
							<?php }?>
							<li class="created">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'on','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 
								<span><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_VIEWS']) {?>
								<li>
									<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['views'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'view(s)','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
								</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_COMMENTS']) {?>
								<li>
									<span><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['comments']->value), ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Comment(s)','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
								</li>
							<?php }?>
						</ul>
						<div class="post-intro">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['introtext'],100,'...' ));?>

						</div>
						<a class="btn-underline" href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value), ENT_QUOTES, 'UTF-8');?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
			</div>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php } else { ?>	
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, dont have any post in this category','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

<?php }
}
}
/* {/block "page_content"} */
}
