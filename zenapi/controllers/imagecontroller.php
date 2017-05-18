<?php

	class imageController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new imageModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Image List
		protected function getImage()
		{
			$viewmodel = new imageModel();
			$viewmodel->getAllImage();
		}


		// Register New Image
		protected function addImage()
		{
			$viewmodel = new imageModel();
			$this->ReturnView($viewmodel->addNewImage(), true);
		}

		// Update Image
		protected function updateImage()
		{
			$viewmodel = new imageModel();
			$this->ReturnView($viewmodel->updateImage(), true);
		}

		protected function deleteImage()
		{
			$viewmodel = new imageModel();
			$this->ReturnView($viewmodel->deleteImage(), true);
		}

	}