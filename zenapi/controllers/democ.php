<?php

	class demoC extends Controller
	{
		protected function Index()
		{
			$viewmodel = new demo();
			$this->ReturnView($viewmodel->Index(), true);
		}

	}