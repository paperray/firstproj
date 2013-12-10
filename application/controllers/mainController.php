<?php
/*
| Our interface. We will use this implementation to strict all webpages request to contain index methods. You may add as you want.
*/
interface AppInterface{
	
	public function index();
}


/*
| Our parent class. Implement what you want to for the use of our models and controllers
*/

Class WebApp{

	/*
	| our variable for loading pdo class
	*/
	private $sql;
	
	/*
	| Property to use for returned content on query
	*/
	public $data_db;
	

	
	
	 function __construct(){
		/*
		| constructor will include all controllers with prefix controller.
		*/
		foreach (glob(INCLUDE_ROOT."application/controllers/controller.*.php") as $controllers){
			 include_once($controllers);
		}
	}
	
	/*
	| Lets use this methods to create an instance of connection with PDO
	*/
	public function loadMySql(){
		$this->sql = new MySql;
		return $this->sql->connectToMySql();
	}
}

/*
| Let's create a class that will wrap all the functions we needed.
| This class is intended for functions only. And is Static.
| All methods should be put in thier designated classes.
*/
Class Functions{
	static private $page;
	static public function sanitizeString($string){
		return mysql_real_escape_string($string);
	}
	
	static public function Get($param){
		if(isset($param)){
			return self::sanitizeString($_GET[$param]);
		}
	}
	
	static public function loadViews($page, $data = array()){
		self::$page = INCLUDE_ROOT."application/views/".$page.".php";
		if(file_exists(self::$page)){
			return include(self::$page);
		}else{
			echo "file not found";
		}
	}

}