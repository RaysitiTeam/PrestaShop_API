<!DOCTYPE html>
<head>
	<title>Delete</title>
</head>
<body>
<?php

define('DEBUG', true);
define('PS_SHOP_PATH', 'http://localhost/zenstore');
define('PS_WS_AUTH_KEY', '1Z4D6VQDJX6GEH2TVP8KWGDTY42R8M2Y');
require_once('./PSWebServiceLibrary.php');

if (isset($_GET['DeleteID']))
{
	//Deletion

	echo '<h1>Customers Deletion</h1><br>';

	// We set a link to go back to list
	echo '<a href="?">Return to the list</a>';

	try
	{
		$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
		// Call for a deletion, we specify the resource name and the id of the resource in order to delete the item
		$webService->delete(array('resource' => 'customers', 'id' => intval($_GET['DeleteID'])));
		// If there's an error we throw an exception
		echo 'Successfully deleted !<meta http-equiv="refresh" content="5"/>';
	}
	catch (PrestaShopWebserviceException $e)
	{
		// Here we are dealing with errors
		$trace = $e->getTrace();
		if ($trace[0]['args'][0] == 404) echo 'Bad ID';
		else if ($trace[0]['args'][0] == 401) echo 'Bad auth key';
		else echo 'Other error<br />'.$e->getMessage();
	}
}
else
{
	// Else get customers list
	try
	{
		$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
		$opt = array('resource' => 'customers');
		$xml = $webService->get($opt);
		$resources = $xml->children()->children();
	}
	catch (PrestaShopWebserviceException $e)
	{
		// Here we are dealing with errors
		$trace = $e->getTrace();
		if ($trace[0]['args'][0] == 404) echo 'Bad ID';
		else if ($trace[0]['args'][0] == 401) echo 'Bad auth key';
		else echo 'Other error';
	}

	echo '<h1>Customers List</h1>';
	echo '<table border="5">';
	if (isset($resources))
	{
		echo '<tr>';
		if (!isset($DeletionID))
		{
			echo '<th>Id</th><th>More</th></tr>';

			foreach ($resources as $resource)
			{
				echo '<td>'.$resource->attributes().'</td><td>'.
				'<a href="?DeleteID='.$resource->attributes().'">Delete</a>'.
				'</td></tr>';
			}
		}
		echo '</table><br/>';
	}
}
?>
</body></html>
