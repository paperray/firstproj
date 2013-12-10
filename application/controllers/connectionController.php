<?php

Class MySql{
	/*
	| Variable for database Host
	*/
	static private $dbHost = DB_HOST;
	/*
	| Variable for database Username
	*/
	static private $dbUser = DB_USER;
	/*
	| Variable for database Password
	*/
	static private $dbPass = DB_PASS;
	/*
	| Variable for database Name
	*/
	static private $dbName = DB_NAME;
	/*
	| Variable we will use to hold the database connection
	*/
	static public $mysqlProperty = '';
		
	
	function connectToMySql(){
	
		self::$mysqlProperty = mysql_connect(
			self::$dbHost,
			self::$dbUser,
			self::$dbPass
		);
		return mysql_select_db(self::$dbName, self::$mysqlProperty);
	
	}
}
