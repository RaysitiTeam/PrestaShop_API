<?php /*%%SmartyHeaderCode:160047174258d6456149b295-42524441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ec6028b1301d3647ace4748243a0376d715f94' => 
    array (
      0 => '/home/zenstibx/public_html/estore/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1490304760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160047174258d6456149b295-42524441',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5909e7a357a819_31835755',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5909e7a357a819_31835755')) {function content_5909e7a357a819_31835755($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://zenstudents.com/estore/manufacturers" title="Manufacturers">
						Manufacturers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://zenstudents.com/estore/1_zen-education-technologies" title="More about Zen Education Technologies">
							Zen Education Technologies
						</a>
					</li>
												</ul>
										<form action="/estore/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">All manufacturers</option>
													<option value="http://zenstudents.com/estore/1_zen-education-technologies">Zen Education Technologies</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
