<?php

	class orderHistoryController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new orderHistoryModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get OrderHistory List
		protected function getOrderHistory()
		{
			$viewmodel = new orderHistoryModel();
			$viewmodel->getAllOrderHistory();
		}


		// Register New OrderHistory
		protected function addOrderHistory()
		{
			$viewmodel = new orderHistoryModel();
			$this->ReturnView($viewmodel->addNewOrderHistory(), true);
		}

		// Update OrderHistory
		protected function updateOrderHistory()
		{
			$viewmodel = new orderHistoryModel();
			$this->ReturnView($viewmodel->updateOrderHistory(), true);
		}

		protected function deleteOrderHistory()
		{
			$viewmodel = new orderHistoryModel();
			$this->ReturnView($viewmodel->deleteOrderHistory(), true);
		}

	}