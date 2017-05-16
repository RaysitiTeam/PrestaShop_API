<?php

	class categoryController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new categoryModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getCategory()
		{
			$viewmodel = new categoryModel();
			$viewmodel->getAllCategory();
		}


		// Register New Category
		protected function addCategory()
		{
			$viewmodel = new categoryModel();
			$this->ReturnView($viewmodel->addNewCategory(), true);
		}

		// Update Category
		protected function updateCategory()
		{
			$viewmodel = new categoryModel();
			$this->ReturnView($viewmodel->updateCategory(), true);
		}

		protected function deleteCategory()
		{
			$viewmodel = new categoryModel();
			$this->ReturnView($viewmodel->deleteCategory(), true);
		}

	}