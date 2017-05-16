<?php

	class guestController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new guestModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getGuest()
		{
			$viewmodel = new guestModel();
			$viewmodel->getAllGuest();
		}


		// Register New Guest
		protected function addGuest()
		{
			$viewmodel = new guestModel();
			$this->ReturnView($viewmodel->addNewGuest(), true);
		}

		// Update Guest
		protected function updateGuest()
		{
			$viewmodel = new guestModel();
			$this->ReturnView($viewmodel->updateGuest(), true);
		}

		protected function deleteGuest()
		{
			$viewmodel = new guestModel();
			$this->ReturnView($viewmodel->deleteGuest(), true);
		}

	}