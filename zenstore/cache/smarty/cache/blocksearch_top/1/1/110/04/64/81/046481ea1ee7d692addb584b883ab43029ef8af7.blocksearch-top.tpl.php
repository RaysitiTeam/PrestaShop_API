<?php /*%%SmartyHeaderCode:131948803358d614aaaccd13-85159491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046481ea1ee7d692addb584b883ab43029ef8af7' => 
    array (
      0 => '/home/zenstibx/public_html/estore/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1490304763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131948803358d614aaaccd13-85159491',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5909d15f406610_18213837',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5909d15f406610_18213837')) {function content_5909d15f406610_18213837($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//zenstudents.com/estore/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
