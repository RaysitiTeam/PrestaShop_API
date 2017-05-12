<?php

	// define('DEBUG', true);
	// define('PS_SHOP_PATH', 'http://localhost/zenstore');		
	// define('PS_WS_AUTH_KEY', '1Z4D6VQDJX6GEH2TVP8KWGDTY42R8M2Y');	

	class OrderServiceModel extends Model
	{
		public function Index()
		{
			echo "Mr. Manjeet! This Page is working fine.";
		}

		// Get All Customers LIst

		public function getAllOrders()
		{
			// WebService Start here
			try
			{
				$webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);

				// Option array of webservice to get customer resource
				$opt['resource'] = 'orders';

				$opt = array(
					'resource' 		=> 'orders',
					'output_format'	=> 'JSON',
					'display' 		=> '[id, id_customer, payment, invoice_number, invoice_date, total_discounts, total_paid, total_products]',
				);

				$result = $webService->get($opt);

				// Get the elements form children of customers markup 'customer'
				$resource = $result->customers->children();
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



	}
