<?php
Class Ajax extends WebApp{

	public $controller;
	
	public function __construct($controller){
		$this->data_db = new Database;
		$this->controller = $this->$controller();
	}

	public function letter(){
		echo json_encode($this->data_db->selectGirlsByLetter(Functions::Get('letters')));
	}
	
	public function site(){
		$sitename = str_replace('-',' ',Functions::Get('letters'));
		echo json_encode($this->data_db->selectGirlsBySite($sitename));
	}
	
	public function dates(){
		echo json_encode($this->data_db->selectAllGirlsByDate());
	}
	
	public function rating(){
		echo json_encode($this->data_db->selectAllGirlsByRate());
	}
	
	public function numviews(){
		echo json_encode($this->data_db->selectAllGirlsByViews());
	}
	
	public function tags(){
		echo json_encode($this->data_db->selectAllGirlsByTags(Functions::Get('letters')));
	}
	
	public function search(){
		echo json_encode($this->data_db->selectGirlsByLetter(Functions::Get('letters')));
	}
	
}
