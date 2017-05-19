<?php

	class orderCarrierController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new orderCarrierModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get OrderCarrier List
		protected function getOrderCarrier()
		{
			$viewmodel = new orderCarrierModel();
			$viewmodel->getAllOrderCarrier();
		}

		// Register New OrderCarrier
		protected function addOrderCarrier()
		{
			$viewmodel = new orderCarrierModel();
			$this->ReturnView($viewmodel->addNewOrderCarrier(), true);
		}

		// Update OrderCarrier
		protected function updateOrderCarrier()
		{
			$viewmodel = new orderCarrierModel();
			$this->ReturnView($viewmodel->updateOrderCarrier(), true);
		}

		protected function deleteOrderCarrier()
		{
			$viewmodel = new orderCarrierModel();
			$this->ReturnView($viewmodel->deleteOrderCarrier(), true);
		}

	}