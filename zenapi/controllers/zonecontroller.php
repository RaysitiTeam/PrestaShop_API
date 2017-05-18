<?php

	class zoneController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new zoneModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Zone List
		protected function getZone()
		{
			$viewmodel = new zoneModel();
			$viewmodel->getAllZone();
		}


		// Register New Zone
		protected function addZone()
		{
			$viewmodel = new zoneModel();
			$this->ReturnView($viewmodel->addNewZone(), true);
		}

		// Update Zone
		protected function updateZone()
		{
			$viewmodel = new zoneModel();
			$this->ReturnView($viewmodel->updateZone(), true);
		}

		protected function deleteZone()
		{
			$viewmodel = new zoneModel();
			$this->ReturnView($viewmodel->deleteZone(), true);
		}

	}