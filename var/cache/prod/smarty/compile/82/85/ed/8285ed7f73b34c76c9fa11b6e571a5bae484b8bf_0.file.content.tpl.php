<?php
/* Smarty version 3.1.33, created on 2021-07-12 00:51:04
  from '/var/www/html/prestashop/admin2397ci9ti/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60eb67c8ad6238_10271722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8285ed7f73b34c76c9fa11b6e571a5bae484b8bf' => 
    array (
      0 => '/var/www/html/prestashop/admin2397ci9ti/themes/default/template/content.tpl',
      1 => 1593780665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60eb67c8ad6238_10271722 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
