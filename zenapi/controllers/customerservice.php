<?php

	class CustomerService extends Controller
	{
		protected function Index()
		{
			$viewmodel = new CustomerServiceModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getCustomer()
		{
			$viewmodel = new CustomerServiceModel();
			$viewmodel->getAllCustomers();
		}


		// Register New Customer
		protected function registerCustomer()
		{
			$viewmodel = new CustomerServiceModel();
			$this->ReturnView($viewmodel->registerNewCustomer(), true);
		}

		// Update Customer
		protected function updateCustomer()
		{
			$viewmodel = new CustomerServiceModel();
			$this->ReturnView($viewmodel->updateCustomer(), true);
		}

		protected function deleteCustomer()
		{
			$viewmodel = new CustomerServiceModel();
			$this->ReturnView($viewmodel->deleteCustomer(), true);
		}

	}