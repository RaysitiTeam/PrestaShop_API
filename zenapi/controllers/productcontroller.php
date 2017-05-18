<?php

	class productController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new productModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Product List
		protected function getProduct()
		{
			$viewmodel = new productModel();
			$viewmodel->getAllProduct();
		}


		// Register New Product
		protected function addProduct()
		{
			$viewmodel = new productModel();
			$this->ReturnView($viewmodel->addNewProduct(), true);
		}

		// Update Product
		protected function updateProduct()
		{
			$viewmodel = new productModel();
			$this->ReturnView($viewmodel->updateProduct(), true);
		}

		protected function deleteProduct()
		{
			$viewmodel = new productModel();
			$this->ReturnView($viewmodel->deleteProduct(), true);
		}

	}