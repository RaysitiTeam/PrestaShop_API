<?php

	class countryController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new countryModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getCountry()
		{
			$viewmodel = new countryModel();
			$viewmodel->getAllCountry();
		}


		// Register New Country
		protected function addCountry()
		{
			$viewmodel = new countryModel();
			$this->ReturnView($viewmodel->addNewCountry(), true);
		}

		// Update Country
		protected function updateCountry()
		{
			$viewmodel = new countryModel();
			$this->ReturnView($viewmodel->updateCountry(), true);
		}

		protected function deleteCountry()
		{
			$viewmodel = new countryModel();
			$this->ReturnView($viewmodel->deleteCountry(), true);
		}

	}