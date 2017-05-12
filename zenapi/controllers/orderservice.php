<?php

	class OrderService extends Controller
	{
		protected function Index()
		{
			$viewmodel = new OrderServiceModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getOrder()
		{
			$viewmodel = new OrderServiceModel();
			$viewmodel->getAllOrders();
		}


	}