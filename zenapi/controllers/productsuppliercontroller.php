<?php

	class productSupplierController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new productSupplierModel();
			$this->ReturnView($viewmodel->Index(), true);
		}

		// Get ProductSupplier List
		protected function getProductSupplier()
		{
			$viewmodel = new productSupplierModel();
			$viewmodel->getAllProductSupplier();
		}

		// Register New ProductSupplier
		protected function addProductSupplier()
		{
			$viewmodel = new productSupplierModel();
			$this->ReturnView($viewmodel->addNewProductSupplier(), true);
		}

		// Update ProductSupplier
		protected function updateProductSupplier()
		{
			$viewmodel = new productSupplierModel();
			$this->ReturnView($viewmodel->updateProductSupplier(), true);
		}

		protected function deleteProductSupplier()
		{
			$viewmodel = new productSupplierModel();
			$this->ReturnView($viewmodel->deleteProductSupplier(), true);
		}

	}