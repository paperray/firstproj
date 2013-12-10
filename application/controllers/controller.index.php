<?php
Class Index extends WebApp implements AppInterface{
	
	/*
	| Lets load our controller using our constructor
	| The value of controller will depend on GET Method Value.
	| Refer on HTACCESS in main root of our application to know our GET method implemented
	*/
	public function __construct($controller){
		$this->data_db = new Database;
		var_dump();
		$this->$controller();

		
	}

	public function index(){
		$data = array(
            'girl_details' => $this->data_db->selectAllGirls(),
            'site_details' => $this->data_db->selectAllSites(),
            'tag_details' => $this->data_db->selectAllTags()
        );
		Functions::loadViews('header');
		Functions::loadViews('index', $data);
		Functions::loadViews('footer');
	}
	
	public function girls(){
		Functions::loadViews('header');
		//Functions::loadViews('index', $data);
		Functions::loadViews('footer');
	}
	
	
}
