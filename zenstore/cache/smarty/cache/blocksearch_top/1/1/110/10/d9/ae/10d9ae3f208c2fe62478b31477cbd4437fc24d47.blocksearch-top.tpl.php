<?php /*%%SmartyHeaderCode:14113590c25b5bfa585-77943504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d9ae3f208c2fe62478b31477cbd4437fc24d47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zenstore\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1493967002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14113590c25b5bfa585-77943504',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_590c28f8a02638_30916372',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c28f8a02638_30916372')) {function content_590c28f8a02638_30916372($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/zenstore/search" >
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
