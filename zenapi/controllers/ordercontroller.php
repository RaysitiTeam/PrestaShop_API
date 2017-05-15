<?php

	class OrderController extends Controller
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

		// Register New Customer
		protected function placeOrder()
		{
			$viewmodel = new OrderServiceModel();
			$this->ReturnView($viewmodel->placeNewOrder(), true);
		}

		// Update Customer
		protected function updateOrder()
		{
			$viewmodel = new OrderServiceModel();
			$this->ReturnView($viewmodel->updateOrder(), true);
		}

		protected function deleteOrder()
		{
			$viewmodel = new OrderServiceModel();
			$this->ReturnView($viewmodel->deleteOrder(), true);
		}


	}