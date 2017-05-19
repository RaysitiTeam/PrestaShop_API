<?php

	class orderDetailController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new orderDetailModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get OrderDetail List
		protected function getOrderDetail()
		{
			$viewmodel = new orderDetailModel();
			$viewmodel->getAllOrderDetail();
		}


		// Register New OrderDetail
		protected function addOrderDetail()
		{
			$viewmodel = new orderDetailModel();
			$this->ReturnView($viewmodel->addNewOrderDetail(), true);
		}

		// Update OrderDetail
		protected function updateOrderDetail()
		{
			$viewmodel = new orderDetailModel();
			$this->ReturnView($viewmodel->updateOrderDetail(), true);
		}

		protected function deleteOrderDetail()
		{
			$viewmodel = new orderDetailModel();
			$this->ReturnView($viewmodel->deleteOrderDetail(), true);
		}

	}