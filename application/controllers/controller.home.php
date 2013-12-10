<?php
Class Home extends WebApp implements AppInterface{

	public function __construct($controller){
		$this->$controller();
	}

	public function index(){
		Functions::loadViews('header');
		Functions::loadViews('footer');
	}
	
	public function home(){
		Functions::loadViews('home');
		//$this->content = new Database;
	}
}
