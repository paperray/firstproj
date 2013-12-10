<?php
class Application{
	/*
	| Load variable for all views
	*/
	public $views;
	public $myClass;
	public $myMethod;
	
	public function __construct($myClass, $myMethod){
		$this->myClass = $myClass;
		$this->myMethod = $myMethod;
		$this->startApplication();
	}
	
	public function startApplication(){
		return new $this->myClass($this->myMethod);
	}
}