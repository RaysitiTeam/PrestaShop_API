<?php

	class storeController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new storeModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Store List
		protected function getStore()
		{
			$viewmodel = new storeModel();
			$viewmodel->getAllStore();
		}


		// Register New Store
		protected function addStore()
		{
			$viewmodel = new storeModel();
			$this->ReturnView($viewmodel->addNewStore(), true);
		}

		// Update Store
		protected function updateStore()
		{
			$viewmodel = new storeModel();
			$this->ReturnView($viewmodel->updateStore(), true);
		}

		protected function deleteStore()
		{
			$viewmodel = new storeModel();
			$this->ReturnView($viewmodel->deleteStore(), true);
		}

	}