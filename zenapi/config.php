<?php

	// Define DB Params

	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "");

	// Define URL
	// define('ROOT_PATH', '/phpmvc/');
	// define('ROOT_URL', 'http://localhost/phpmvc/');

	class Db
	{
		private static $instance;		// The single instance
		protected $dbh;
		protected $stmt;



		public static function getInstance()
	    {
	        if (null === static::$instance) {
	            static::$instance = new static();
	        }

	        return static::$instance;
	    }

		public function __construct()
		{
			$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
		}

		public function beginTransaction() { 
	        return $this->dbh->beginTransaction();
	    }

	    public function commit() { 
	        return $this->dbh->commit();
	    }

	    public function rollback() { 
	        return $this->dbh->rollback();
	    }
	}
	
	
