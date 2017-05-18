<?php

	class stockController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new stockModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Stock List
		protected function getStock()
		{
			$viewmodel = new stockModel();
			$viewmodel->getAllStock();
		}


		// Register New Stock
		protected function addStock()
		{
			$viewmodel = new stockModel();
			$this->ReturnView($viewmodel->addNewStock(), true);
		}

		// Update Stock
		protected function updateStock()
		{
			$viewmodel = new stockModel();
			$this->ReturnView($viewmodel->updateStock(), true);
		}

		protected function deleteStock()
		{
			$viewmodel = new stockModel();
			$this->ReturnView($viewmodel->deleteStock(), true);
		}

	}