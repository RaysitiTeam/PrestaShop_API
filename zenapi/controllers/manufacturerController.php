<?php

	class manufacturerController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new manufacturerModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getManufacturer()
		{
			$viewmodel = new manufacturerModel();
			$viewmodel->getAllManufacturer();
		}


		// Register New Manufacturer
		protected function addManufacturer()
		{
			$viewmodel = new manufacturerModel();
			$this->ReturnView($viewmodel->addNewManufacturer(), true);
		}

		// Update Manufacturer
		protected function updateManufacturer()
		{
			$viewmodel = new manufacturerModel();
			$this->ReturnView($viewmodel->updateManufacturer(), true);
		}

		protected function deleteManufacturer()
		{
			$viewmodel = new manufacturerModel();
			$this->ReturnView($viewmodel->deleteManufacturer(), true);
		}

	}