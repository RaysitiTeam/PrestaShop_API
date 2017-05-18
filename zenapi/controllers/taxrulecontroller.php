<?php

	class taxRuleController extends Controller
	{
		protected function Index()
		{
			$viewmodel = new taxRuleModel();
			$this->ReturnView($viewmodel->Index(), true);
		}


		// Get TaxRule List
		protected function getTaxRule()
		{
			$viewmodel = new taxRuleModel();
			$viewmodel->getAllTaxRule();
		}


		// Register New TaxRule
		protected function addTaxRule()
		{
			$viewmodel = new taxRuleModel();
			$this->ReturnView($viewmodel->addNewTaxRule(), true);
		}

		// Update TaxRule
		protected function updateTaxRule()
		{
			$viewmodel = new taxRuleModel();
			$this->ReturnView($viewmodel->updateTaxRule(), true);
		}

		protected function deleteTaxRule()
		{
			$viewmodel = new taxRuleModel();
			$this->ReturnView($viewmodel->deleteTaxRule(), true);
		}

	}