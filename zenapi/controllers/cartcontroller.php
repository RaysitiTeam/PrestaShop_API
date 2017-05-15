<?php

	class cartController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new cartModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getCart()
		{
			$viewmodel = new cartModel();
			$viewmodel->getAllCart();
		}


		// Register New Cart
		protected function addCart()
		{
			$viewmodel = new cartModel();
			$this->ReturnView($viewmodel->addNewCart(), true);
		}

		// Update Cart
		protected function updateCart()
		{
			$viewmodel = new cartModel();
			$this->ReturnView($viewmodel->updateCart(), true);
		}

		protected function deleteCart()
		{
			$viewmodel = new cartModel();
			$this->ReturnView($viewmodel->deleteCart(), true);
		}

	}