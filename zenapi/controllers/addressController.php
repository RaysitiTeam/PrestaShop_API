<?php

	class addressController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new addressModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getAddress()
		{
			$viewmodel = new addressModel();
			$viewmodel->getAllAddress();
		}


		// Register New Address
		protected function addAddress()
		{
			$viewmodel = new addressModel();
			$this->ReturnView($viewmodel->addNewAddress(), true);
		}

		// Update Address
		protected function updateAddress()
		{
			$viewmodel = new addressModel();
			$this->ReturnView($viewmodel->updateAddress(), true);
		}

		protected function deleteAddress()
		{
			$viewmodel = new addressModel();
			$this->ReturnView($viewmodel->deleteAddress(), true);
		}

	}