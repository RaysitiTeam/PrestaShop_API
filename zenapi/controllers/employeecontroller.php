<?php

	class employeeController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new employeeModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Employee List
		protected function getEmployee()
		{
			$viewmodel = new employeeModel();
			$viewmodel->getAllEmployee();
		}


		// Register New Employee
		protected function addEmployee()
		{
			$viewmodel = new employeeModel();
			$this->ReturnView($viewmodel->addNewEmployee(), true);
		}

		// Update Employee
		protected function updateEmployee()
		{
			$viewmodel = new employeeModel();
			$this->ReturnView($viewmodel->updateEmployee(), true);
		}

		protected function deleteEmployee()
		{
			$viewmodel = new employeeModel();
			$this->ReturnView($viewmodel->deleteEmployee(), true);
		}

	}