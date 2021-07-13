<?php
/* Smarty version 3.1.33, created on 2021-07-12 01:03:57
  from '/var/www/html/prestashop/admin2397ci9ti/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60eb6acd363a10_96507281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e00649ca8f3ccfc472809d4c7581de612b8563' => 
    array (
      0 => '/var/www/html/prestashop/admin2397ci9ti/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60eb6acd363a10_96507281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131247305560eb6acd362e14_60138889', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_131247305560eb6acd362e14_60138889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_131247305560eb6acd362e14_60138889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
