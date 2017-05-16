<?php
	header("Access-Control-Allow-Origin: null");

	define('DEBUG', true);
	define('PS_SHOP_PATH', 'http://localhost/zenstore');		
	define('PS_WS_AUTH_KEY', '1Z4D6VQDJX6GEH2TVP8KWGDTY42R8M2Y');

	// Database Config 

	require 'config.php';
	require('PSWebServiceLibrary.php');

	// Include Bootstrap.php for URL calling
	require('classes/Bootstrap.php');
	require('classes/Controller.php');
	require('classes/Model.php');

	// Require Controllers
	require('controllers/customercontroller.php');
	require('controllers/ordercontroller.php');
	require('controllers/addresscontroller.php');
	require('controllers/cartcontroller.php');
	require('controllers/categorycontroller.php');
	require('controllers/manufacturercontroller.php');
	require('controllers/contactcontroller.php');
	require('controllers/countrycontroller.php');
	require('controllers/guestcontroller.php');
	require('controllers/combinationcontroller.php');

	// Require Models
	require('models/customerservicemodel.php');
	require('models/orderservicemodel.php');
	require('models/addressmodel.php');
	require('models/cartmodel.php');
	require('models/categorymodel.php');
	require('models/manufacturermodel.php');
	require('models/contactmodel.php');
	require('models/countrymodel.php');
	require('models/guestmodel.php');
	require('models/combinationmodel.php');

	$bootstrap = new Bootstrap($_GET);

	$controller = $bootstrap->createController();

	if($controller){
		$controller->executeAction();
	}
