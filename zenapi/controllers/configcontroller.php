<?php

	class configController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new configModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getConfig()
		{
			$viewmodel = new configModel();
			$viewmodel->getAllConfig();
		}


		// Register New Config
		protected function addConfig()
		{
			$viewmodel = new configModel();
			$this->ReturnView($viewmodel->addNewConfig(), true);
		}

		// Update Config
		protected function updateConfig()
		{
			$viewmodel = new configModel();
			$this->ReturnView($viewmodel->updateConfig(), true);
		}

		protected function deleteConfig()
		{
			$viewmodel = new configModel();
			$this->ReturnView($viewmodel->deleteConfig(), true);
		}

	}