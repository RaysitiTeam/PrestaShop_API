<?php

	class orderDiscountController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new orderDiscountModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get OrderDiscount List
		protected function getOrderDiscount()
		{
			$viewmodel = new orderDiscountModel();
			$viewmodel->getAllOrderDiscount();
		}


		// Register New OrderDiscount
		protected function addOrderDiscount()
		{
			$viewmodel = new orderDiscountModel();
			$this->ReturnView($viewmodel->addNewOrderDiscount(), true);
		}

		// Update OrderDiscount
		protected function updateOrderDiscount()
		{
			$viewmodel = new orderDiscountModel();
			$this->ReturnView($viewmodel->updateOrderDiscount(), true);
		}

		protected function deleteOrderDiscount()
		{
			$viewmodel = new orderDiscountModel();
			$this->ReturnView($viewmodel->deleteOrderDiscount(), true);
		}

	}