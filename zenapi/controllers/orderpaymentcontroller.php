<?php

	class orderPaymentController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new orderPaymentModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get OrderPayment List
		protected function getOrderPayment()
		{
			$viewmodel = new orderPaymentModel();
			$viewmodel->getAllOrderPayment();
		}

		// Register New OrderPayment
		protected function addOrderPayment()
		{
			$viewmodel = new orderPaymentModel();
			$this->ReturnView($viewmodel->addNewOrderPayment(), true);
		}

		// Update OrderPayment
		protected function updateOrderPayment()
		{
			$viewmodel = new orderPaymentModel();
			$this->ReturnView($viewmodel->updateOrderPayment(), true);
		}

		protected function deleteOrderPayment()
		{
			$viewmodel = new orderPaymentModel();
			$this->ReturnView($viewmodel->deleteOrderPayment(), true);
		}

	}