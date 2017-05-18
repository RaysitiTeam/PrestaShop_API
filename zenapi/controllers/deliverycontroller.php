<?php

	class deliveryController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new deliveryModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Delivery List
		protected function getDelivery()
		{
			$viewmodel = new deliveryModel();
			$viewmodel->getAllDelivery();
		}


		// Register New Delivery
		protected function addDelivery()
		{
			$viewmodel = new deliveryModel();
			$this->ReturnView($viewmodel->addNewDelivery(), true);
		}

		// Update Delivery
		protected function updateDelivery()
		{
			$viewmodel = new deliveryModel();
			$this->ReturnView($viewmodel->updateDelivery(), true);
		}

		protected function deleteDelivery()
		{
			$viewmodel = new deliveryModel();
			$this->ReturnView($viewmodel->deleteDelivery(), true);
		}

	}