<?php

	class cartRuleController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new cartRuleModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get Customer List
		protected function getCartRule()
		{
			$viewmodel = new cartRuleModel();
			$viewmodel->getAllCartRule();
		}


		// Register New CartRule
		protected function addCartRule()
		{
			$viewmodel = new cartRuleModel();
			$this->ReturnView($viewmodel->addNewCartRule(), true);
		}

		// Update CartRule
		protected function updateCartRule()
		{
			$viewmodel = new cartRuleModel();
			$this->ReturnView($viewmodel->updateCartRule(), true);
		}

		protected function deleteCartRule()
		{
			$viewmodel = new cartRuleModel();
			$this->ReturnView($viewmodel->deleteCartRule(), true);
		}

	}