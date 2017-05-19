<?php	

	class orderCarrierModel extends Model
	{
		public function Index()
		{
			echo "Mr. Manjeet! This Page is working fine.";
		}

		// Get All OrderCarrier
		public function getAllOrderCarrier()
		{
			try
			{
				$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

				$opt['resource'] = 'order_carriers';

				$opt = array(
					'resource' 		=> 'order_carriers',
					'output_format'	=> 'JSON',
					'display' 		=> '[id, id_order, id_carrier, weight, shipping_cost_tax_excl, shipping_cost_tax_incl, date_add]',
				);

				$result = $webService->get($opt);

				$resource = $result->order_carriers->children();
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


		// Add new OrderCarrier
		public function addNewOrderCarrier()
		{
			
			try
			{
				$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

				$opt = array('resource' => 'order_carriers');

				if (isset($_GET['Create']))
					$xml = $webService->get(array('url' => PS_SHOP_PATH.'/api/order_carriers?schema=blank'));
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
					$opt = array('resource' => 'order_carriers');
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
			echo '<h1>Order Carrier\'s ';
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

		// Update OrderCarrier
		public function updateOrderCarrier()
		{
			
			try
			{
				$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

				$opt = array('resource' => 'order_carriers');
				if (isset($_GET['id']))
					$opt['id'] = $_GET['id'];
				$xml = $webService->get($opt);

				// Here we get the elements from children of order Carrier markup which is children of prestashop root markup
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
					$opt = array('resource' => 'order_carriers');
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
			echo '<h1>Order Carrier\'s ';
			if (isset($_GET['id'])) echo 'Update';
			else echo 'List';
			echo '</h1>';

			// We set a link to go back to list if we are in Order Carrier's details
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
				//Show list of Order Carrier
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
				//Show Order Carrier form
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

		// Delete an OrderCarrier
		public function deleteOrderCarrier()
		{
			if (isset($_GET['DeleteID']))
			{
				//Deletion

				echo '<h1>Order Carrier Deletion</h1><br>';

				// We set a link to go back to list
				echo '<a href="?">Return to the list</a>';

				try
				{
					$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
					// Call for a deletion, we specify the resource name and the id of the resource in order to delete the item
					$webService->delete(array('resource' => 'order_carriers', 'id' => intval($_GET['DeleteID'])));
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
				// Else get Order Carrier list
				try
				{
					$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
					$opt = array('resource' => 'order_carriers');
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

				echo '<h1>Order Carrier List</h1>';
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