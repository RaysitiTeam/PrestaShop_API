<?php

	class taxController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new taxModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Tax List
		protected function getTax()
		{
			$viewmodel = new taxModel();
			$viewmodel->getAllTax();
		}


		// Register New Tax
		protected function addTax()
		{
			$viewmodel = new taxModel();
			$this->ReturnView($viewmodel->addNewTax(), true);
		}

		// Update Tax
		protected function updateTax()
		{
			$viewmodel = new taxModel();
			$this->ReturnView($viewmodel->updateTax(), true);
		}

		protected function deleteTax()
		{
			$viewmodel = new taxModel();
			$this->ReturnView($viewmodel->deleteTax(), true);
		}

	}