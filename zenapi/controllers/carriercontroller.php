<?php

	class carrierController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new carrierModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Carrier List
		protected function getCarrier()
		{
			$viewmodel = new carrierModel();
			$viewmodel->getAllCarrier();
		}


		// Register New Carrier
		protected function addCarrier()
		{
			$viewmodel = new carrierModel();
			$this->ReturnView($viewmodel->addNewCarrier(), true);
		}

		// Update Carrier
		protected function updateCarrier()
		{
			$viewmodel = new carrierModel();
			$this->ReturnView($viewmodel->updateCarrier(), true);
		}

		protected function deleteCarrier()
		{
			$viewmodel = new carrierModel();
			$this->ReturnView($viewmodel->deleteCarrier(), true);
		}

	}