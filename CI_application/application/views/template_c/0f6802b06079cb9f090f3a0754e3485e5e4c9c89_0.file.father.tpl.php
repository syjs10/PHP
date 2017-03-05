<?php
/* Smarty version 3.1.30, created on 2017-02-01 19:30:08
  from "/var/www/html/CI_application/application/views/applicate/father.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5891c6c0afaba2_50857242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f6802b06079cb9f090f3a0754e3485e5e4c9c89' => 
    array (
      0 => '/var/www/html/CI_application/application/views/applicate/father.tpl',
      1 => 1485948606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5891c6c0afaba2_50857242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5876843965891c6c0af5aa0_79520382', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18261894595891c6c0af9f69_75506514', 'body');
}
/* {block 'head'} */
class Block_5876843965891c6c0af5aa0_79520382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/bootstrap3/css/bootstrap-theme.min.css">
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_18261894595891c6c0af9f69_75506514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
