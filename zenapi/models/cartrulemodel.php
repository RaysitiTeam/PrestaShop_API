<?php	

	class cartRuleModel extends Model
	{
		public function Index()
		{
			echo "Mr. Manjeet! This Combinations Page is working fine.";
		}

		// Get All Cart rulr
		public function getAllCartRule()
		{
			// WebService Start here
			try
			{
				$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

				// Option array of webservice to get guest resource
				$opt['resource'] = 'cart_rules';

				$opt = array(
					'resource' 		=> 'cart_rules',
					'output_format'	=> 'JSON',
					'display' 		=> '[id]',
				);

				$result = $webService->get($opt);

				// Get the elements form children of cart rules markup 'cart_rule'
				$resource = $result->cart_rules->children();
			} 
			catch(PrestaShopWebserviceException $e)
			{
				// Error Declaration
				$trace = $e->getTrace();
				if($trace[0]['args'][0] == 404) echo "Bad ID";
				else if($trace[0]['args'][0] == 401) echo "Bad Auth Key";
				else echo "Other Error";
			}
		}


		// Add new Cart Rule
		public function addNewCartRule()
		{
			// Here we use the WebService to get the schema of "cart rules" resource
			try
			{
				$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

				$opt = array('resource' => 'cart_rules');

				if (isset($_GET['Create']))
					$xml = $webService->get(array('url' => PS_SHOP_PATH.'/api/customers?schema=blank'));
				else
					$xml = $webService->get($opt);
				$resources = $xml->children()->children();
			}
			catch (PrestaShopWebserviceException $e)
			{
				// Here we are dealing with errors
				$trace = $e->getTrace();
				if ($trace[0]['args'][0] == 404) echo 'Bad ID';
				else if ($trace[0]['args'][0] == 401) echo 'Bad auth key';
				else echo 'Other error<br />'.$e->getMessage();
			}

			if (count($_POST) > 0)
			{
			// Here we have XML before update, lets update XML
				foreach ($resources as $nodeKey => $node)
				{
					$resources->$nodeKey = $_POST[$nodeKey];
				}
				try
				{
					$opt = array('resource' => 'cart_rules');
					if ($_GET['Create'] == 'Creating')
					{
						$opt['postXml'] = $xml->asXML();
						$xml = $webService->add($opt);
						echo "Successfully added.";
					}
				}
				catch (PrestaShopWebserviceException $ex)
				{
					// Here we are dealing with errors
					$trace = $ex->getTrace();
					if ($trace[0]['args'][0] == 404) echo 'Bad ID';
					else if ($trace[0]['args'][0] == 401) echo 'Bad auth key';
					else echo 'Other error<br />'.$ex->getMessage();
				}
			}

			// We set the Title
			echo '<h1>Cart Rule\'s ';
			if (isset($_GET['Create'])) echo 'Creation';
			else echo 'List';
			echo '</h1>';

			// We set a link to go back to list if we are in creation
			if (isset($_GET['Create']))
				echo '<a href="?">Return to the list</a>';

			if (!isset($_GET['Create']))
				echo '<input type="button" onClick="document.location.href=\'?Create\'" value="Create">';
			else
				echo '<form method="POST" action="?Create=Creating">';

			echo '<table border="5">';
			if (isset($resources))
			{

			echo '<tr>';
			if (count($_GET) == 0)
			{
				echo '<th>Id</th></tr>';

				foreach ($resources as $resource)
				{
					echo '<tr><td>'.$resource->attributes().'</td></tr>';
				}
			}
			else
			{
				echo '</tr>';
				foreach ($resources as $key => $resource)
				{
					echo '<tr><th>'.$key.'</th><td>';
					if (isset($_GET['Create'])) {
						echo '<input type="text" name="'.$key.'" value=""/>';
					}
					echo '</td></tr>';
				}
			}

			}
			echo '</table><br/>';

			if (isset($_GET['Create'])) {
				echo '<input type="submit" value="Create"></form>';
			}

		}

		// Update Cart Rule
		public function updateCartRule()
		{
			// First : We always get the cart Rule's list or a specific one
			try
			{
				$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

				$opt = array('resource' => 'cart_rules');
				if (isset($_GET['id']))
					$opt['id'] = $_GET['id'];
				$xml = $webService->get($opt);

				// Here we get the elements from children of cart rule markup which is children of prestashop root markup
				$resources = $xml->children()->children();
			}
			catch (PrestaShopWebserviceException $e)
			{
				// Here we are dealing with errors
				$trace = $e->getTrace();
				if ($trace[0]['args'][0] == 404) echo 'Bad ID';
				else if ($trace[0]['args'][0] == 401) echo 'Bad auth key';
				else echo 'Other error<br />'.$e->getMessage();
			}

			// Second : We update the data and send it to the web service
			if (isset($_GET['id']) && isset($_POST['id'])) // Here we check id cause in every resource there's an id
			{
				// Here we have XML before update, lets update XML with new values
				foreach ($resources as $nodeKey => $node)
				{
					$resources->$nodeKey = $_POST[$nodeKey];
				}
				// And call the web service
				try
				{
					$opt = array('resource' => 'cart_rules');
					$opt['putXml'] = $xml->asXML();
					$opt['id'] = $_GET['id'];
					$xml = $webService->edit($opt);
					// if WebService don't throw an exception the action worked well and we don't show the following message
					echo "Successfully updated.";
				}
				catch (PrestaShopWebserviceException $ex)
				{
					// Here we are dealing with errors
					$trace = $ex->getTrace();
					if ($trace[0]['args'][0] == 404) echo 'Bad ID';
					else if ($trace[0]['args'][0] == 401) echo 'Bad auth key';
					else echo 'Other error<br />'.$ex->getMessage();
				}
			}

			// UI

			// We set the Title
			echo '<h1>Cart Rule\'s ';
			if (isset($_GET['id'])) echo 'Update';
			else echo 'List';
			echo '</h1>';

			// We set a link to go back to list if we are in cart rule's details
			if (isset($_GET['id']))
				echo '<a href="?">Return to the list</a>';

			if (isset($_GET['id']))
				echo '<form method="POST" action="?id='.$_GET['id'].'">';
			echo '<table border="5">';
			if (isset($resources))
			{

			echo '<tr>';
			if (!isset($_GET['id']))
			{
				//Show list of cart rule
				echo '<th>Id</th><th>More</th></tr>';
				foreach ($resources as $resource)
				{
					echo '<td>'.$resource->attributes().'</td><td>'.
					'<a href="?id='.$resource->attributes().'">Update</a>&nbsp;'.
					'</td></tr>';
				}
			}
			else
			{
				//Show cart rule form
				echo '</tr>';
				foreach ($resources as $key => $resource)
				{
					echo '<tr><th>'.$key.'</th><td>';
					echo '<input type="text" name="'.$key.'" value="'.$resource.'"/>';
					echo '</td></tr>';
				}
			}

			}
			echo '</table><br/>';

			if (isset($_GET['id']))
				echo '<input type="submit" value="Update"></form>';
		}

		// Delete an Cart Rule
		public function deleteCartRule()
		{
			if (isset($_GET['DeleteID']))
			{
				//Deletion

				echo '<h1>Cart Rule Deletion</h1><br>';

				// We set a link to go back to list
				echo '<a href="?">Return to the list</a>';

				try
				{
					$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
					// Call for a deletion, we specify the resource name and the id of the resource in order to delete the item
					$webService->delete(array('resource' => 'cart_rules', 'id' => intval($_GET['DeleteID'])));
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
				// Else get cart rule list
				try
				{
					$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
					$opt = array('resource' => 'cart_rules');
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

				echo '<h1>Cart Rule List</h1>';
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
		}



	}