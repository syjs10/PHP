<?php
/* Smarty version 3.1.30, created on 2017-02-01 19:32:25
  from "/var/www/html/CI_application/application/views/applicate/survey.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5891c7494991e7_33936017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc5205e1446e9a06a2dd9510578049daa8f1ed09' => 
    array (
      0 => '/var/www/html/CI_application/application/views/applicate/survey.html',
      1 => 1485948743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5891c7494991e7_33936017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13256518005891c74948da71_71950305', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11835810575891c749497931_95327737', 'body');
}
/* {block 'head'} */
class Block_13256518005891c74948da71_71950305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<title>报名</title>
	<style type="text/css" rel="stylesheet">
		body{
			color: #fff;
			background: url("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/survey.jpg") ;
			background-size: cover;
			background-position: center;
			/*background-color: #000;*/
		}
		.h1{
			position: relative;
			top:5%;
		}
		.container{
			position: relative;
			top: 10%;
		}
	           	table th, table td { 
	           		/*padding-top:1% !important;*/
	           		
			text-align: center !important;
			border: 0px solid #fff !important; 
		}
		label{
			font-size: 22px;
		}
		.tab{
			padding-top: 30px;
			padding-bottom: 15px;
			padding-right: 3%;
			background: rgba(0,0,0,0.2);
			border-radius: 5px;
			box-shadow: 0px 0px 7px #333;
			
		}
		.input{
			background: rgba(10,10,10, 0.3) !important;
			border: 0px;
			box-shadow: 0px 0px 3px #333;
			height: 5%;
			width:100%;
		}
		input {
			box-shadow: 0px 0px 3px  #2de812;
		}
	</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_11835810575891c749497931_95327737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1 class="h1" align="center"> 报名表 </h1>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 tab" >
			<form action="" class="form form-horizontal"  >
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
						<div class="from-group " style="padding-bottom: 7%;">
							<label for="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" class="col-md-2" ><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</label>
							<div class="col-md-10 ">
								<input type="text" class="form-control input "   name="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
">
							</div>	
							<div class="clearfix visible-xs-block"></div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
				<input type ="submit" class="btn btn-success" style="position: relative; left:30%;width:40%;" name="报名">
				
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<?php
}
}
/* {/block 'body'} */
}
