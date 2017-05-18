<?php

	class shopController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new shopModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Shop List
		protected function getShop()
		{
			$viewmodel = new shopModel();
			$viewmodel->getAllShop();
		}


		// Register New Shop
		protected function addShop()
		{
			$viewmodel = new shopModel();
			$this->ReturnView($viewmodel->addNewShop(), true);
		}

		// Update Shop
		protected function updateShop()
		{
			$viewmodel = new shopModel();
			$this->ReturnView($viewmodel->updateShop(), true);
		}

		protected function deleteShop()
		{
			$viewmodel = new shopModel();
			$this->ReturnView($viewmodel->deleteShop(), true);
		}

	}