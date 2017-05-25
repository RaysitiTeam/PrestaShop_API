<?php /*%%SmartyHeaderCode:187803737358d64561541386-43137798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918c6c11a69b76cb13011116257a5282bb9fc3c2' => 
    array (
      0 => '/home/zenstibx/public_html/estore/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1490304765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187803737358d64561541386-43137798',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5909e7a3655187_51102597',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5909e7a3655187_51102597')) {function content_5909e7a3655187_51102597($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://zenstudents.com/estore/supplier" title="Suppliers">
					Suppliers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://zenstudents.com/estore/1__zen-education-technologies" 
					title="More about Zen Education Technologies">
				                Zen Education Technologies
                					</a>
                				</li>
										</ul>
										<form action="/estore/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">All suppliers</option>
													<option value="http://zenstudents.com/estore/1__zen-education-technologies">Zen Education Technologies</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
