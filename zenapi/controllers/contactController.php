<?php

	class contactController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new contactModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getContact()
		{
			$viewmodel = new contactModel();
			$viewmodel->getAllContact();
		}


		// Register New Contact
		protected function addContact()
		{
			$viewmodel = new contactModel();
			$this->ReturnView($viewmodel->addNewContact(), true);
		}

		// Update Contact
		protected function updateContact()
		{
			$viewmodel = new contactModel();
			$this->ReturnView($viewmodel->updateContact(), true);
		}

		protected function deleteContact()
		{
			$viewmodel = new contactModel();
			$this->ReturnView($viewmodel->deleteContact(), true);
		}

	}