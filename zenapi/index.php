<?php
	header("Access-Control-Allow-Origin: null");

	// Database Config 

	require 'config.php';
	require('PSWebServiceLibrary.php');

	// Include Bootstrap.php for URL calling
	require('classes/Bootstrap.php');
	require('classes/Controller.php');
	require('classes/Model.php');

	// Require Controllers
	require('controllers/customerservice.php');
	require('controllers/orderservice.php');

	// Require Models
	require('models/customerservicemodel.php');
	require('models/orderservicemodel.php');

	$bootstrap = new Bootstrap($_GET);

	$controller = $bootstrap->createController();

	if($controller){
		$controller->executeAction();
	}
