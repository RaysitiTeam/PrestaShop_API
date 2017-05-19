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
	require('controllers/cartrulecontroller.php');
	require('controllers/configcontroller.php');
	require('controllers/zonecontroller.php');
	require('controllers/taxcontroller.php');
	require('controllers/taxrulecontroller.php');
	require('controllers/storecontroller.php');
	require('controllers/stockcontroller.php');
	require('controllers/productcontroller.php');
	require('controllers/shopcontroller.php');
	require('controllers/deliverycontroller.php');
	require('controllers/carriercontroller.php');
	require('controllers/groupcontroller.php');
	require('controllers/employeecontroller.php');
	require('controllers/imagecontroller.php');
	require('controllers/invoicecontroller.php');
	require('controllers/orderdetailcontroller.php');
	require('controllers/orderdiscountcontroller.php');
	require('controllers/orderhistorycontroller.php');
	require('controllers/orderpaymentcontroller.php');
	require('controllers/ordercarriercontroller.php');
	require('controllers/orderstatecontroller.php');
	require('controllers/productsuppliercontroller.php');
	require('controllers/democ.php');

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
	require('models/cartrulemodel.php');
	require('models/configmodel.php');
	require('models/zonemodel.php');
	require('models/taxmodel.php');
	require('models/taxrulemodel.php');
	require('models/storemodel.php');
	require('models/stockmodel.php');
	require('models/productmodel.php');
	require('models/shopmodel.php');
	require('models/deliverymodel.php');
	require('models/carriermodel.php');
	require('models/groupmodel.php');
	require('models/employeemodel.php');
	require('models/imagemodel.php');
	require('models/invoicemodel.php');
	require('models/orderdetailmodel.php');
	require('models/orderdiscountmodel.php');
	require('models/orderhistorymodel.php');
	require('models/orderpaymentmodel.php');
	require('models/ordercarriermodel.php');
	require('models/orderstatemodel.php');
	require('models/productsuppliermodel.php');
	require('models/demo.php');

	$bootstrap = new Bootstrap($_GET);


	$controller = $bootstrap->createController();

	if($controller){
		$controller->executeAction();
	}
