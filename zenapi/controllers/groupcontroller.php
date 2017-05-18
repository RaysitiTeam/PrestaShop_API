<?php

	class groupController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new groupModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Group List
		protected function getGroup()
		{
			$viewmodel = new groupModel();
			$viewmodel->getAllGroup();
		}


		// Register New Group
		protected function addGroup()
		{
			$viewmodel = new groupModel();
			$this->ReturnView($viewmodel->addNewGroup(), true);
		}

		// Update Group
		protected function updateGroup()
		{
			$viewmodel = new groupModel();
			$this->ReturnView($viewmodel->updateGroup(), true);
		}

		protected function deleteGroup()
		{
			$viewmodel = new groupModel();
			$this->ReturnView($viewmodel->deleteGroup(), true);
		}

	}