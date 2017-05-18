<?php

	class invoiceController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new invoiceModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Invoice List
		protected function getInvoice()
		{
			$viewmodel = new invoiceModel();
			$viewmodel->getAllInvoice();
		}


		// Register New Invoice
		protected function addInvoice()
		{
			$viewmodel = new invoiceModel();
			$this->ReturnView($viewmodel->addNewInvoice(), true);
		}

		// Update Invoice
		protected function updateInvoice()
		{
			$viewmodel = new invoiceModel();
			$this->ReturnView($viewmodel->updateInvoice(), true);
		}

		protected function deleteInvoice()
		{
			$viewmodel = new invoiceModel();
			$this->ReturnView($viewmodel->deleteInvoice(), true);
		}

	}