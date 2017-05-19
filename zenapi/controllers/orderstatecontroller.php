<?php

	class orderStateController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new orderStateModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get OrderState List
		protected function getOrderState()
		{
			$viewmodel = new orderStateModel();
			$viewmodel->getAllOrderState();
		}

		// Register New OrderState
		protected function addOrderState()
		{
			$viewmodel = new orderStateModel();
			$this->ReturnView($viewmodel->addNewOrderState(), true);
		}

		// Update OrderState
		protected function updateOrderState()
		{
			$viewmodel = new orderStateModel();
			$this->ReturnView($viewmodel->updateOrderState(), true);
		}

		protected function deleteOrderState()
		{
			$viewmodel = new orderStateModel();
			$this->ReturnView($viewmodel->deleteOrderState(), true);
		}

	}