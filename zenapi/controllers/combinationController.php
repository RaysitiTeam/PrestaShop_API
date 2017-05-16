<?php

	class combinationController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new combinationModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getCombination()
		{
			$viewmodel = new combinationModel();
			$viewmodel->getAllCombination();
		}


		// Register New Combination
		protected function addCombination()
		{
			$viewmodel = new combinationModel();
			$this->ReturnView($viewmodel->addNewCombination(), true);
		}

		// Update Combination
		protected function updateCombination()
		{
			$viewmodel = new combinationModel();
			$this->ReturnView($viewmodel->updateCombination(), true);
		}

		protected function deleteCombination()
		{
			$viewmodel = new combinationModel();
			$this->ReturnView($viewmodel->deleteCombination(), true);
		}

	}