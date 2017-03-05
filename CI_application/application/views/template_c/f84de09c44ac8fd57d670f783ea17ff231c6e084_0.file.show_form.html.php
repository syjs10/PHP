<?php
/* Smarty version 3.1.30, created on 2017-02-01 18:22:32
  from "/var/www/html/CI_application/application/views/applicate/show_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5891b6e8196e31_77834702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f84de09c44ac8fd57d670f783ea17ff231c6e084' => 
    array (
      0 => '/var/www/html/CI_application/application/views/applicate/show_form.html',
      1 => 1485856336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5891b6e8196e31_77834702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11750740295891b6e818b823_55421555', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19021729185891b6e8195990_14541719', 'body');
?>

<?php }
/* {block 'head'} */
class Block_11750740295891b6e818b823_55421555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<title>已添加报名项目</title>
	<style type="text/css">
	           	table th, table td { 
			text-align: center !important;
		}
	</style>
	
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_19021729185891b6e8195990_14541719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-hover table-bordered">	
		<tr>
			<th>序号</th>
			<th>报名项目</th>
			<th>内容字数</th>
		</tr>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
			<tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

					</td>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<a href="<?php echo $_smarty_tpl->tpl_vars['addsurvey']->value;?>
">继续添加</a>

</div>
<div class="col-md-2"></div>
<?php
}
}
/* {/block 'body'} */
}
