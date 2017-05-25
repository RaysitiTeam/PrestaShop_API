{**
* 2015 Skrill
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
*
*  @author Skrill <contact@skrill.com>
*  @copyright  2015 Skrill
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{if $module == "skrill"}
	{if $errorMessage}
	    <div class="alert alert-danger">
	        <button type="button" class="close" data-dismiss="alert">×</button>
	        {$errorMessage|escape:'html':'UTF-8'}
	    </div>
	{/if}
{/if}
